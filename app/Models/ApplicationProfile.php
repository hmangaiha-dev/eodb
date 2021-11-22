<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationProfile extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title','application_id', 'operational_type','remark'];

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function processFlows(): HasMany
    {
        return $this->hasMany(ProcessFlow::class);
    }

}
