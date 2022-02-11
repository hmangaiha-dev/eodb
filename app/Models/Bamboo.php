<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bamboo extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'year', 'species', 'nos','total_bamboo','total_mature'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
