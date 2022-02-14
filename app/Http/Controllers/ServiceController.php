<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\Department;
use App\Models\DepartmentService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(ApplicationProfile::query()->get());
    }

    public function getServices(Request $request)
    {
        return [
            'list' => DepartmentService::query()->paginate()
        ];
    }

    public function actRules(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $data = Department::query()->where('dept_code', $office->code)
            ->pluck('act_rules');
        return [
            'data' => $data,
        ];
    }

    public function notifications(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $info = Department::query()->where('dept_code', $office->code)
            ->pluck('info');
        return [
            'data' => $info,
        ];
    }


    public function otherInformations(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $info = Department::query()->where('dept_code', $office->code)
            ->first();
        return [
            'data' => $info,
        ];
    }
}
