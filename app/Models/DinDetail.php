<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'qualification',
        'association_year',
        'experience_year',
    ];

    public function partA()
    {
        return $this->belongsTo(PartA::class,'part_a_id');
    }
}
