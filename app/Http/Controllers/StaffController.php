<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{

    public function index(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('staff:read')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $search = $request->get('search');
        $data = Staff::query()
            ->when($search,function ($q) use ($search) {
                $q->where('full_name', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%")
                    ->orWhere('phone', 'LIKE', "%$search%");
            })
            ->paginate($per_page);
        return response()->json([
            'data' => $data,
            'message' => ''
        ]);
    }

    public function show(Request $request,Staff $staff)
    {
        $user = auth('sanctum')->user();
        if (!$user->tokenCan('staff:read')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $data = $staff->load(['roles', 'postings']);
        return response()->json([
            'data' => $data,
            'message' => ''
        ]);
    }

    public function store(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('staff:create')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $this->validate($request, Staff::RULES);
        DB::transaction(function ($q) use ($request) {
            $staff = new Staff($request->only(['full_name', 'email', 'phone']));
            $staff->password = Hash::make($request->get('password'));
            $staff->save();
            $staff->roles()->sync($request->get('roles'));
        });

        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'list' => Staff::query()->paginate($per_page),
            'message' => 'Staff created successfully'
        ], 200);


    }

    public function update(Request $request, Staff $staff)
    {
        $user = auth('sanctum')->user();
        if (!$user->tokenCan('staff:edit')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $this->validate($request, [
            'full_name'=>'required',
            'email'=>'required',
            'phone'=>'required|digits:10',
        ]);
        $staff->update($request->only($staff->getFillable()));
        if ($request->has('roles')) {
            $staff->roles()->sync($request->get('roles'));
        }
        if ($request->has('password')) {
            $staff->password = Hash::make($request->get('password'));
        }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $staff,
            'list' => Staff::query()->paginate($per_page),
            'message' => 'Staff updated successfully'
        ], 200);
    }

    public function destroy(Request $request, Staff $staff)
    {
        dd(auth('staff')->user());
        $user = auth('sanctum')->user();
        if ($user->tokenCan('staff:delete')) {
            throw new \Exception('Unauthorized access', 403);
        }

        $staff->delete();
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $staff,
            'list' => Staff::query()->paginate($per_page),
            'message' => 'Staff deleted successfully'
        ], 200);
    }
}
