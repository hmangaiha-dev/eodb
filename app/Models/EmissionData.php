<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmissionData extends Model
{
    use HasFactory;

    protected $fillable = [
        'capacity_ton',
        'fuel_type',
        'fuel_quantity',
        'agl',
        'arl',
        'control_device',
        'boiler_rating',
        'stream_pressure',
        'capacity_lt',
    ];

    public function partF()
    {
        return $this->belongsTo(PartF::class, 'part_f_id');
    }
}
