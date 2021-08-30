<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(UserPosting::class);
    }
    public function departments(){
        return $this->belongsToMany(Department::class, 'user_postings');
    }
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_postings');
    }

    public function canDo(String $permFullName){
        $result=explode(':', $permFullName);
        $departmentCode=$result[0];
        $action = $result[1];

        $canAction = false;
        $sameDepartment = false;

        if (!$this->departments()->exists()) {
            return false;
        }
        $departments = $this->departments();
        foreach ($departments as $department) {
            if ($department->code === $departmentCode) {
                $sameDepartment = true;
                break;
            }
        }
        $roles=$this->roles();
        foreach ($roles as $role) {
            foreach ($role->permissions as $perms) {
                if ($perms->name == $action){
                    $canAction = true;
                    break;
                }

            }
        }
        return $sameDepartment && $canAction;
    }
}
