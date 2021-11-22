<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcessFlow extends Model
{
    use HasFactory;

    protected $fillable = ['step', 'staff_id', 'application_profile_id','actions','remark','published'];

    public function applicationProfile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class);
    }

}
