<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ProcessFlow extends Model
{
    use HasFactory;

    protected $fillable = ['step', 'staff_id', 'application_profile_id','actions','remark'];
    protected $appends = ['dealing'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
    public function applicationProfile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class);
    }

    public function getDealingAttribute()
    {
        return $this->staff()->first()?->full_name;
    }


}
