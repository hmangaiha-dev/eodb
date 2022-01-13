<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Office extends Model
{
    const RULES = [
        'code' => 'required|unique:offices',
        'name' => 'required'
    ];
    use HasFactory;

    protected $fillable = ['code', 'name', 'description','contact'];

    public function roles(): MorphToMany
    {
        return $this->morphToMany(Role::class, name: 'roleable', table: 'roleables');
    }

    public function postings(): HasMany
    {
        return $this->hasMany(StaffPost::class);
    }
    public function staffs(): BelongsToMany
    {
        return $this->belongsToMany(Staff::class, table: 'staff_posts')->withTimestamps();
    }
    public function bankDetail(): MorphOne
    {
        return $this->morphOne(BankDetail::class, 'owner');
    }
    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class,'office_applications');
    }
}
