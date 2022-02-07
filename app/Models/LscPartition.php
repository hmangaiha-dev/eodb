<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LscPartition extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'name', 'address', 'kum','caste'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
