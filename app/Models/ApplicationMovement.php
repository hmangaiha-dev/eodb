<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ApplicationMovement
 *
 * @property int $id
 * @property int $application_id
 * @property int $staff_id
 * @property int $step
 * @property string $status
 * @property string|null $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Application|null $application
 * @property-read mixed $duration
 * @property-read mixed $received_at
 * @property-read mixed $sent_at
 * @property-read mixed $staff_name
 * @property-read \App\Models\Staff|null $staff
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereStep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationMovement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ApplicationMovement extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'staff_id','status', 'step', 'remark'];
    protected $appends = ['staff_name', 'received_at','sent_at','duration'];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function getStaffNameAttribute()
    {
        return $this->staff()->first()?->full_name;
    }

    public function getReceivedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y H:i:s');
    }
    public function getSentAtAttribute()
    {
        return Carbon::parse($this->updated_at)->format('d/m/Y H:i:s');
    }
    public function getDurationAttribute()
    {
        return Carbon::parse($this->created_at)->diffInRealHours($this->udpated_at);
    }
}
