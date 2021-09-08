<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
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

        ], 200);
    }
}
