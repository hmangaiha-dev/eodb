<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationValue extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'field_key', 'field_value', 'field_label'];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
