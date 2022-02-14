<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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


    public function about(): MorphOne
    {
        return $this->morphOne(About::class,'model',);
    }
    public function services(): HasMany
    {
        return $this->hasMany(DepartmentService::class);
    }

    public function acts(): HasMany
    {
        return $this->hasMany(ActRule::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function otherInformations(): HasMany
    {
        return $this->hasMany(OtherInformation::class);
    }
}
