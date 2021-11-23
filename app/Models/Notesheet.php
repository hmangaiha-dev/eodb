<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Notesheet extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','created_by','noteable_id','noteable_type'];

    public function noteable(): MorphTo
    {
        return $this->morphTo('noteable');
    }

}
