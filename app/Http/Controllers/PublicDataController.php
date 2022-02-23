<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\Department;
use App\Models\Office;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Staff;
use App\Utils\DataUtil;
use Illuminate\Http\Request;

class PublicDataController extends Controller
{
    public function fetchPublicData(Request $request)
    {
        return response()->json([
            'roles' => Role::query()->get(['id', 'name'])->map(fn($role) => ['value' => $role->id, 'label' => $role->name]),
            'permissions'=>Permission::query()->get(['id','name'])->map(fn($item)=>[
                'value'=>$item->id,
                'label'=>$item->name
            ]),
            'districts' => DataUtil::DISTRICTS,
            'staffs'=>Staff::query()->get(['id as value','full_name as label']),
            'offices'=>Office::query()->get(['id as value','name as label']),

        ], 200);
    }
    public function fetchStaffData(Request $request)
    {
        return response()->json([
            'roles' => Role::query()->get(['id', 'name'])->map(fn($role) => ['value' => $role->id, 'label' => $role->name]),
            'permissions'=>Permission::query()->get(['id','name'])->map(fn($item)=>[
                'value'=>$item->id,
                'label'=>$item->name
            ]),
            'file_types' => [
                ['value' => 'common_file', 'label' => 'Common file'],
            ],
            'districts' => DataUtil::DISTRICTS,
            'staffs'=>Staff::query()->get(['id as value','full_name as label']),
            'offices'=>Office::query()->get(['id as value','name as label']),
            'application_profiles'=>ApplicationProfile::query()->get(),
            'departments'=>Department::query()->get(['id as value','dept_name as label']),

        ], 200);
    }
}
