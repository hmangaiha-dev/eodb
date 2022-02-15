<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
