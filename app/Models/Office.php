<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Office extends Model
{
    const RULES = [
        'code' => 'required|unique:offices',
        'name' => 'required'
    ];
    use HasFactory;

    protected $fillable = ['code', 'name', 'description','contacts'];

    public function roles(): MorphToMany
    {
        return $this->morphToMany(Role::class, name: 'roleable', table: 'roleables');
    }

    public function postings(): HasMany
    {
        return $this->hasMany(StaffPosting::class);
    }

}
