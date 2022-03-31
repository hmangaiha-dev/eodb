<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;

    const RULES = [
        'full_name' => 'required',
        'password' => 'required:confirmed',
        'email' => 'required',
        'phone' => 'required'
        // 'regn_no'=>'required'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
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

    public function posts()
    {
        return $this->hasMany(UserPosting::class);
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'user_postings');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_postings');
    }

    public function canDo(String $permFullName)
    {
        $result = explode(':', $permFullName);
        $departmentCode = $result[0];
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
        $roles = $this->roles();
        foreach ($roles as $role) {
            foreach ($role->permissions as $perms) {
                if ($perms->name == $action) {
                    $canAction = true;
                    break;
                }
            }
        }
        return $sameDepartment && $canAction;
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'user_id', 'id');
    }
    public function commonApplications()
    {
        return $this->hasMany(CommonApplication::class, 'user_id', 'id');
    }

    public function certificates()
    {
        return $this->hasManyThrough(Certificate::class, Application::class, 'user_id', 'owner_id', 'id', 'id');
    }
    public function drafts()
    {
        return $this->hasManyThrough(DraftApplication::class, Application::class, 'user_id', 'application_id', 'id', 'id');
    }

    // public function payments()
    // {
    //     //  return $this->applications()->whereHas('payment')->get();
    //     return $this->hasManyThrough(Payment::class, Application::class, 'user_id', 'owner', 'id', 'id');
    // }
    // public function payments()
    // {
    //     //  return $this->applications()->whereHas('payment')->get();
    //     return $this->orders()->with('payment');
    // }
}
