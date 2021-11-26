<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
