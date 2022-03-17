<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentProfile extends Model
{
    use HasFactory;

    protected $fillable = ['hod_secratariat_name','hod_secratariat_designation','hod_directorate_name','hod_directorate_designation'];

    protected $appends = ['sect_photo','dict_photo'];

    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id','id');
    }
    public function office()
    {
        return $this->belongsTo(Office::class,'dept_id','id');
    }

    public function getSectPhotoAttribute()
    {
        return url('/storage') . '/' . $this->hod_secratariat_photo;
    }
    public function getDictPhotoAttribute()
    {
        return url('/storage') . '/' . $this->hod_directorate_photo;
    }
}
