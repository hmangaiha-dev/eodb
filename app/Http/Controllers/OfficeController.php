<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\BankDetail;
use App\Models\Office;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\UnauthorizedException;

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
        $data = Office::query()->with(['staffs', 'bankDetail'])->find($id);
        return response()->json(
            $data
            , 200);
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
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('office:update'))
            throw new UnauthorizedException('Unauthorized access');

        $this->validate($request, [
            'code' => 'required',
            'name' => 'required'
        ]);
        $bankDetail = $request->get('bank_detail');
        $office->update($request->only($office->getFillable()));
        if (!blank($bankDetail)) {
            $bank = new BankDetail($bankDetail);
            $office->bankDetail()->save($bank);
        }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        return response()->json([
            'data' => $office,
            'list' => Office::query()->paginate($per_page),
            'message' => 'Office updated successfully'
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
            'message' => 'Office deleted successfully'
        ]);
    }

    public function onGoingApplications(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office=$staff->currentPost();
//        $office = new Office();
        $applications=$office?->applications()
            ->paginate();
        return response()->json($applications,200);
    }

    public function archivedApplications(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office=$staff->currentPost();
//        $office = new Office();
        $applications=$office?->applications()
            ->where('archived',true)
            ->paginate();
        return response()->json($applications,200);
    }

    public function officeUsers(Request $request,Office $office)
    {
        $staffs=$office->staffs()->where('status', 'on-duty')
            ->get();
        return response()->json($staffs,200);
    }
}
