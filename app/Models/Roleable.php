<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Roleable extends Model
{
    use HasFactory;

    public function roleable(): MorphTo
    {
        return $this->morphTo('roleable');
    }
}
