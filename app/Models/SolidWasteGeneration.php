<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolidWasteGeneration extends Model
{
    use HasFactory;

    protected $fillable = [
        'source_generation',
        'nature_type',
        'quantity_ton',
        'disposal_mode',
    ];

    public function partF()
    {
        return $this->belongsTo(PartF::class, 'part_f_id');
    }
}
