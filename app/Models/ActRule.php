<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ActRule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','status'];
    protected $appends = ['department_name'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function attachments(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }

    public function getDepartmentNameAttribute()
    {
        return $this->department()->first()?->dept_name ?? 'NA';
    }

}
