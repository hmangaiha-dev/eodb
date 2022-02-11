<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentService extends Model
{
    use HasFactory;

    protected $appends = ['dept_name','dept_slug'];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getDeptSlugAttribute()
    {
        return $this->department()->first()?->slug;
    }
}
