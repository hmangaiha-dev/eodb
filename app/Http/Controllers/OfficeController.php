<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\BankDetail;
use App\Models\DepartmentProfile;
use App\Models\Office;
use App\Models\Staff;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\UnauthorizedException;
use Storage;

class OfficeController extends Controller
{
    protected Office $office;

    public function __construct(Office $office)
    {
        $this->office = $office;
    }

    public function index(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('office:read'))
            throw new UnauthorizedException('Unauthorized access');
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json(Office::query()->paginate($per_page), 200);
    }

    public function show(Request $request, int $id)
    {
        $data = Office::query()->with(['staffs', 'bankDetail', 'profile'])->find($id);
        return response()->json(
            $data,
            200
        );
    }

    public function store(Request $request)
    {

        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('office:create'))
            throw new UnauthorizedException('Unauthorized access');
        $bankDetail = $request->get('bank_detail');
        $this->validate($request, Office::RULES);

        $office = null;
        DB::transaction(function ($schema) use ($request, $bankDetail) {
            $office = Office::query()->create($request->only($this->office->getFillable()));
            if (!blank($bankDetail)) {
                $bank = new BankDetail($bankDetail);
                $office->bankDetail()->save($bank);
            }
        });

        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $office,
            'list' => Office::query()->paginate($per_page),
            'message' => 'New Office created successfully'
        ]);
    }

    public function update(Request $request, Office $office)
    {
        // return $request->all();
        // return $request->file('hod_secratariat_photo')->getClientOriginalName();
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('office:edit'))
            throw new UnauthorizedException('Unauthorized access');

        $this->validate($request, [
            'code' => 'required',
            'name' => 'required'
        ]);
        // $bankDetail = $request->get('bank_detail');
        // $profile = $request->get('profile');
        $office->update($request->only($office->getFillable()));
        // if (!blank($bankDetail)) {
        // $bank = new BankDetail($request->only((new BankDetail())->getFillable()));
        $office->bankDetail()->update($request->only((new BankDetail())->getFillable()));
        // }
        // if (!blank($profile)) {
        // $bank = new DepartmentProfile($request->only((new DepartmentProfile())->getFillable()));
        $profile = $office->profile()->updateOrCreate([
            'dept_id' => $office->id
        ], $request->only((new DepartmentProfile())->getFillable()));

        if ($request->hasFile('hod_secratariat_photo')) {

            Storage::deleteDirectory($request->code . '/hod_secretariat_photo');
            $fileName = $request->file('hod_secratariat_photo')->getClientOriginalName();
            $sect_photo = $request->file('hod_secratariat_photo')->storeAs($request->code . '/hod_secretariat_photo', $fileName);
            $profile->hod_secratariat_photo = $sect_photo;
        }

        if ($request->hasFile('hod_directorate_photo')) {
            Storage::deleteDirectory($request->code . '/hod_directorate_photo');
            $fileName = $request->file('hod_directorate_photo')->getClientOriginalName();
            $director_photo = $request->file('hod_directorate_photo')->storeAs($request->code . '/hod_directorate_photo', $fileName);
            $profile->hod_directorate_photo = $fileName;
        }
        $profile->save();
        // }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $office,
            'list' => Office::query()->paginate($per_page),
            'message' => 'Office updated successfully',
            // 'profile' => $profile
        ]);
    }

    public function destroy(Request $request, Office $office)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('office:delete'))
            throw new UnauthorizedException('Unauthorized access');

        $office->delete();
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $office,
            'list' => Office::query()->get(),
            'message' => 'Office deleted successfully',

        ]);
    }

    public function onGoingApplications(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        //        $office = new Office();
        $applications = $office?->applications()
            ->paginate();
        return response()->json($applications, 200);
    }

    public function archivedApplications(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        //        $office = new Office();
        $applications = $office?->applications()
            ->where('archived', true)
            ->paginate();
        return response()->json($applications, 200);
    }

    public function officeUsers(Request $request, Office $office)
    {
        $staffs = $office->staffs()->where('status', 'on-duty')
            ->get();
        return response()->json($staffs, 200);
    }
}
