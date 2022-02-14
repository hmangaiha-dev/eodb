<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * App\Models\Application
 *
 * @property int $id
 * @property string $application_code
 * @property string $regn_no
 * @property string $current_state
 * @property string|null $remark
 * @property int|null $application_profile_id
 * @property int $user_id
 * @property int $department_id
 * @property \datetime|null $created_at
 * @property \datetime|null $updated_at
 * @property string $archived
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ApplicationValue[] $applicationValues
 * @property-read int|null $application_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bamboo[] $bamboos
 * @property-read int|null $bamboos_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Certificate[] $certificates
 * @property-read int|null $certificates_count
 * @property-read \App\Models\Department|null $department
 * @property-read mixed $application_name
 * @property-read mixed $current_step
 * @property-read mixed $last_step
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LscPartition[] $lscDetails
 * @property-read int|null $lsc_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ApplicationMovement[] $movements
 * @property-read int|null $movements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notesheet[] $notesheets
 * @property-read int|null $notesheets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Office[] $office
 * @property-read int|null $office_count
 * @property-read \App\Models\ApplicationProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Staff[] $staff
 * @property-read int|null $staff_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereApplicationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereApplicationProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereArchived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCurrentState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereRegnNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUserId($value)
 * @mixin \Eloquent
 */
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

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
