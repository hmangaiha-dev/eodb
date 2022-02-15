<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class DepartmentService extends Model
{
    use HasFactory;

    protected $appends = ['dept_name','category_type','dept_slug'];



    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }


    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }


    public function getDeptNameAttribute() {
        return $this->department()->first()->dept_name;
    }

    public function getCategoryTypeAttribute()
    {
        return $this->category()->first()->name;
    }


    public function getDeptSlugAttribute()
    {
        return $this->department()->first()->slug;
    }
}
