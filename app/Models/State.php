<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class State extends Model
{
    const SUBMITTED='Submitted';
    const VERIFIED='Verified';
    const REJECTED='Rejected';
    const APPROVED='Approved';

    use HasFactory;

    protected $appends = ['profile'];

    protected $fillable = ['name', 'remark','owner'];
    protected $with = ['attachment'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }

    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }

    public function getProfileAttribute()
    {
        return $this->owner()->first();
    }

}
