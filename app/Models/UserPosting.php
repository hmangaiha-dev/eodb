<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPosting extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','role_id','department_id','joining_date','leaving_date','remark','status'];

    public function roles(){
        return $this->belongsToMany(Role::class, 'user_posting_roles');
    }
}
