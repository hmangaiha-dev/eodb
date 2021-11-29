<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'remark'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
}