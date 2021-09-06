<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function canDo($action)
    {
        $user = request()->user();
        return$user->tokenCan($action);

    }
//    public function checkPermission(User $user,$action){
//        $roles=$user->roles()->get();
//        $roles->map(function (Role $role) {
//            $perms=$role->permissions()->get();
//            $perms
//        });
//
//    }
}
