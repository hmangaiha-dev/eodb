<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ProcessFlow
 *
 * @property int $id
 * @property int $step
 * @property int $duration
 * @property int $staff_id
 * @property int $application_profile_id
 * @property string|null $actions
 * @property string|null $remark
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ApplicationProfile|null $applicationProfile
 * @property-read mixed $dealing
 * @property-read \App\Models\Staff|null $staff
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereActions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereApplicationProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereStep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProcessFlow whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProcessFlow extends Model
{
    use HasFactory;

    protected $fillable = ['step', 'staff_id', 'application_profile_id','actions','remark'];
    protected $appends = ['dealing'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
    public function applicationProfile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class);
    }

    public function getDealingAttribute()
    {
        return $this->staff()->first()?->full_name;
    }


}
