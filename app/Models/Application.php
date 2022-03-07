<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Application extends Model
{
    use HasFactory;

    const ONGOING_STATUSES = ['submitted'];

    protected $fillable = ['application_code', 'regn_no','application_profile_id','user_id','department_id' ,'current_state','archived', 'remark'];
    protected $appends = ['application_name','current_step','last_step'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function certificates(): MorphMany
    {
        return $this->morphMany(Certificate::class,'owner');
    }
    public function applicationValues(): HasMany
    {
        return $this->hasMany(ApplicationValue::class);
    }
    public function lscDetails(): HasMany
    {
        return $this->hasMany(LscPartition::class);
    }
    public function bamboos(): HasMany
    {
        return $this->hasMany(Bamboo::class);
    }

    public function states()
    {
        return $this->morphMany(State::class,'owner');
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class, 'application_code', 'code');
    }
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'owner');
    }

    public function notesheets(): MorphMany
    {
        return $this->morphMany(Notesheet::class,'noteable');
    }

    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(Staff::class, 'application_movements', 'application_id', 'recipient');
    }

    public function movements(): HasMany
    {
        return $this->hasMany(ApplicationMovement::class);
    }

    public function getApplicationNameAttribute()
    {

        return $this->profile()->first()->title;
    }
    public function getCurrentStepAttribute()
    {
        return $this->movements()->latest()->first()?->step;
    }
    public function getLastStepAttribute()
    {
        $profile= $this->profile()->first();
        return $profile->processFlows()->orderBy('step','desc')->latest()?->first()?->step;
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function office(): BelongsToMany
    {
        return $this->belongsToMany(Office::class, 'office_applications');
    }

    public function getCertificateFolder(): string
    {
        return $this->department()->first()?->dept_code . '/' . $this->application_code;
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
