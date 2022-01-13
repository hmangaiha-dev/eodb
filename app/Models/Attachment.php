<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['mime', 'original_name', 'label', 'size', 'path'];
    protected $appends = ['full_path'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
    public function getFullPathAttribute()
    {
        return $url = url('/storage') . '/' . $this->path;
    }
}
