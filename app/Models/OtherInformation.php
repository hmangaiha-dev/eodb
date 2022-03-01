<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class OtherInformation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    protected $appends = ['department_name'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }

    public function getDepartmentNameAttribute()
    {
        return $this->department()->first()?->dept_name ?? 'NA';
    }
}
