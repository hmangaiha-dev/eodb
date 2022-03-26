<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Staff;
use App\Models\User;
use App\Utils\PostingStatus;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private ?User $currentUser;
    private ?Staff $currentStaff;

    public function __construct()
    {
        $this->currentUser = auth()->user();
        $this->currentStaff = auth()->user();
    }

    public function currentDepartment()
    {
        return $this->currentStaff->postings()
            ->where('status', PostingStatus::ON_DUTY)
            ->latest()
            ->first();
    }
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
