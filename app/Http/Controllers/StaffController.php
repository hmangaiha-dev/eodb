<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Staff;
use App\Models\StaffPosting;
use App\Utils\PostingStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $offices = Staff::query()->paginate($per_page);
        return response()->json([
            'data' => $offices,
            'message' => ''
        ], 200);
    }

    public function show(Request $request, int $id)
    {
        $staff = Staff::query()->with('postings', function ($builder) {
            $builder->where('status', PostingStatus::ON_DUTY)
                ->latest()
                ->first();
        })->find($id);
        return response()->json([
            'data' => $staff,
            'message' => ''
        ], 200);
    }

    public function create(Request $request)
    {
        $this->validate($request, Staff::RULES);

        $staff = Staff::query()->create($request->only((new Staff())->getFillable()));
        $address = new Address($request->only((new Address())->getFillable()));
        $staff->addresses()->save($address);
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $staff,
            'list' => Staff::query()->paginate($per_page),
            'message' => 'New staff created successfully'
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, Staff::RULES);

        $staff = Staff::query()->findOrFail($id)->update($request->only((new Staff())->getFillable()));
        if ($request->has('address')) {
            $this->validate($request, Address::RULES);
            $address = $request->get('address');
            $staff->addresses()->upsert([
                'full_address' => $address['full_address'],
                'locality' => $address['locality'],
                'pincode' => $address['pincode'],
                'district' => $address['district'],
            ], 'id');
        }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $staff,
            'list' => Staff::query()->paginate($per_page),
            'message' => 'Staff updated successfully'
        ]);
    }

    public function destroy(Request $request, Staff $staff)
    {
        $staff->delete();
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $staff,
            'list' => Staff::query()->paginate($per_page),
            'message' => 'Staff deleted successfully'
        ]);
    }

    public function staffPosting(Request $request)
    {
        $this->validate($request, [
            'office_id' => Rule::exists('offices', 'id'),
            'staff_id' => Rule::exists('staffs', 'id'),
            'roles' => 'required',
            'joining_date' => 'required',
        ]);
        $staff = new Staff();
        $staff->postings()->latest()->first()->update([
            'leaving_date' => now()
        ]);
        $posting = new StaffPosting($request->only((new StaffPosting())->getFillable()));
        $posting->roles()->sync($request->get('roles'));
//        $posting->save();
        $staff->postings()->save($posting);

        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $posting,
            'list' => StaffPosting::query()->paginate($per_page),
            'message' => 'Staff deleted successfully'
        ]);
    }
}
