<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;

    const RULES = [
        'name'=>'required|unique:roles'
    ];
    protected $fillable = ['name', 'description'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function postings(): MorphToMany
    {
        return $this->morphedByMany(Office::class, name: 'roleable', table: 'roleables');
    }
    public function offices(): MorphToMany
    {
        return $this->morphedByMany(Office::class, name: 'roleable', table: 'roleables');
    }
}
