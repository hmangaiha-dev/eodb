<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['application_code', 'application_id', 'current_state', 'remark'];

    public function states()
    {
        return $this->morphMany('owner', State::class);
    }

    public function attachments(): MorphMany
    {
        return $this->morphMany('owner', Attachment::class);
    }
}
