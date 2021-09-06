<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class StaffPosting extends Model
{
    use HasFactory;

    protected $fillable = ['office_id', 'staff_id', 'joining_date', 'leaving_date', 'remark','status'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function roles(): MorphToMany
    {
        return $this->morphToMany(Role::class, name: 'roleable', table: 'roleables');
    }
}
