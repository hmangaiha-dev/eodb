<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\ApplicationProfile
 *
 * @property int $id
 * @property string $code
 * @property string|null $title
 * @property string|null $remark
 * @property string|null $operational_type
 * @property int $published
 * @property int|null $office_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Application|null $application
 * @property-read mixed $actions
 * @property-read mixed $last_step
 * @property-read \App\Models\Office|null $office
 * @property-read \App\Models\PrintTemplate|null $printTemplate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProcessFlow[] $processFlows
 * @property-read int|null $process_flows_count
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereOperationalType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationProfile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ApplicationProfile extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title','application_id', 'operational_type','remark','published','office_id'];
    protected $appends = ['last_step','actions'];

    public function printTemplate(): HasOne
    {
        return $this->hasOne(PrintTemplate::class);
    }
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function processFlows(): HasMany
    {
        return $this->hasMany(ProcessFlow::class);
    }

    public function getLastStepAttribute()
    {
        return $this->processFlows()->orderBy('step','desc')->latest()?->first()?->step;
    }

  public function getActionsAttribute()
    {
        return $this->processFlows()->orderBy('step','desc')->latest()?->first()?->step;
    }

}
