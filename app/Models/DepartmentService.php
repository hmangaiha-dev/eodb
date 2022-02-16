<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartmentService extends Model
{
    use HasFactory;

    protected $fillable = ['service_name', 'who_should_apply', 'how_to_apply', 'document_to_submit', 'timeline', 'fees', 'path', 'sample_form', 'operational_type'];

    protected $appends = ['dept'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function getDeptAttribute()
    {
        return $this->department()->first()?->dept_name;
    }
}
