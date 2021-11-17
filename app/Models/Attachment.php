<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['mime', 'original_name', 'label', 'size', 'path'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
}
