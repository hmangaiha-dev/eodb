<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class OtherInformation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(OtherInformation::class);
    }
    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }
}
