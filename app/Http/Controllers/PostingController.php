<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Staff;
use App\Models\StaffPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class PostingController extends Controller
{
    public function index(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('posting:read')) {
            throw new \Exception('Unauthorized access',403);
        }

        $perPage = $request->has('rowsPerPage') ? $request->get('rowsPerPage') : 15;
        $sortValue = $request->has('descending') ? 'desc' : 'asc';
        $sortBy = $request->has('sortBy') ? $request->get('sortBy') : 'full_name';
        $search = $request->get('search');
        $data = Staff::query()
            ->with(['postings','roles'])
            ->when(!blank($search), function ($q) use ($search) {
                return $q->where('full_name', 'LIKE', "$search%");
            })
            ->orderBy($sortBy, $sortValue)
            ->paginate($perPage);

        return response()->json([
            'data' => $data,
        ]);

    }

    public function staffPosts(Request $request, Staff $staff)
    {
        $data = $staff->postings()->get();
        return response()->json([
            'data' => $data,
        ]);

    }

    public function postStaff(Request $request)
    {

        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('posting:create')) {
            throw new \Exception('Unauthorized access',403);
        }
        $this->validate($request, [
            'office_id' => Rule::exists('offices', 'id'),
            'staff_id' => Rule::exists('staffs', 'id'),
        ]);
        $office = Office::query()->findOrFail($request->get('office_id'));
        $staff = Staff::query()->findOrFail($request->get('staff_id'));

        DB::transaction(function ($q) use ($office, $staff, $request) {
            $staff->postings()->oldest()->update([
                'leaving_date' => Carbon::now()]);
            StaffPost::query()->create([
                'status' => $request->get('status'),
                'joining_date' => $request->get('joining_date'),
                'office_id' => $office->id,
                'staff_id' => $staff->id,
                'remark' => $request->get('remark')
            ]);
        });

        return response()->json([
            'data' => $office,
            'message' => 'Posting created successfully'
        ]);


    }
}
