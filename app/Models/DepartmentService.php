<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartmentService extends Model
{
    use HasFactory;

    protected $fillable = ['dept'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function getDeptAttributes()
    {
        return $this->department()->first()?->dept_name;
    }
}
