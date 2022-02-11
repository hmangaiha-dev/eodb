<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'subject', 'authority', 'notify_at','status'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function attachments(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }


}
