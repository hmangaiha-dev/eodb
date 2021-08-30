<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','contact','email', 'description'];

    public function roles(){
        return $this->belongsToMany(Role::class, 'department_roles');
    }

    public function staffs(){
        return $this->hasMany(User::class, 'user_postings');
    }
    public function scopeCurrentStaffs(Builder $builder){
        $builder->joinWhere(table:'user_postings',first: '',operator: '',second: '');
    }

}
