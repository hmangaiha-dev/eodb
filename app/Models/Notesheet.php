<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Notesheet extends Model
{
    use HasFactory;

    protected $fillable = ['note'];

    public function noteable(): MorphTo
    {
        return $this->morphTo('noteable');
    }

}
