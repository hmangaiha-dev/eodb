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
    public function  fetchStaffData(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        return response()->json([
            'roles' => Role::query()->get(['id', 'name'])->map(fn($role) => ['value' => $role->id, 'label' => $role->name]),
            'permissions'=>Permission::query()->get(['id','name'])->map(fn($item)=>[
                'value'=>$item->id,
                'label'=>$item->name
            ]),
            'role' => auth('sanctum')->user()->roles()->get(),
            'file_types' => [
                ['value' => 'common_file', 'label' => 'Common file'],
            ],
            'districts' => DataUtil::DISTRICTS,
            'staffs'=>Staff::query()->get(['id as value','full_name as label']),
            // 'offices'=>Office::query()->get(['id as value','name as label']),
            'offices'=>Office::query()->when($office,function($q) use ($office){
                $q->where('id',$office->id);
            })->get(['id as value','name as label']),
            'application_profiles'=>ApplicationProfile::query()->when(isset($office),function($q) use($office) {
                return $q->where('office_id',$office->id);
            })->get(),
            'print_templates'=>ApplicationProfile::query()->whereHas('printTemplate')->get(),
            'departments'=>Department::query()->get(['id as value','dept_name as label']),

        ], 200);
    }
}
