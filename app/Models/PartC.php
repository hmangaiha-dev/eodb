<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartC extends Model
{
    use HasFactory;
    protected $fillable = [
        'choose_applicable'
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
