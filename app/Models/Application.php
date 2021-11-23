<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['application_code', 'regn_no','application_profile_id','user_id','department_id' ,'current_state', 'remark'];
    protected $appends = ['application_name'];
    public function states()
    {
        return $this->morphMany('owner', State::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class, 'application_code', 'code');
    }
    public function attachments(): MorphMany
    {
        return $this->morphMany('owner', Attachment::class);
    }

    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(Staff::class, 'application_movements', 'application_id', 'recipient');
    }

    public function getApplicationNameAttribute()
    {

        return '';
    }
}
