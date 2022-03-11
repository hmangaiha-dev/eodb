<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApplicationProfile extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title','application_id', 'operational_type','remark','published','office_id'];
    protected $appends = ['last_step','actions','dept_name'];

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
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class,'office_id','id');
    }
    public function processFlows(): HasMany
    {
        return $this->hasMany(ProcessFlow::class);
    }

    public function getLastStepAttribute()
    {
        return $this->processFlows()->orderBy('step','desc')->latest()?->first()?->step;
    }

    public function getDeptNameAttribute()
    {
        return $this->department()->first()->dept_name;
    }

  public function getActionsAttribute()
    {
        return $this->processFlows()->orderBy('step','desc')->latest()?->first()?->step;
    }

}
