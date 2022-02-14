<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Notesheet
 *
 * @property int $id
 * @property string $title
 * @property string|null $body
 * @property string $noteable_type
 * @property int $noteable_id
 * @property int $staff_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $written_by
 * @property-read Model|\Eloquent $noteable
 * @property-read \App\Models\Staff|null $staff
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereNoteableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereNoteableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Notesheet extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','staff_id','noteable_id','noteable_type'];
    protected $appends = ['written_by'];

    public function noteable(): MorphTo
    {
        return $this->morphTo('noteable');
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function getWrittenByAttribute()
    {
        $fullname= $this->staff()->first()?->full_name;
        $at=Carbon::parse($this->created_at)->diffForHumans();

        return "$fullname created at $at";

    }

}
