<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'dept_code',
        'dept_name',
        'dict_name',
        'sect_name',
        'slug',
        'info',
        'about_us',
        'act_rules',
        'other_info',


    ];
    // protected $guarded = [];



    public function services()
    {
        return $this->hasMany(DepartmentService::class);
    }
}
