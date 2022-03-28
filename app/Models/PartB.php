<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartB extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposed_plot_requirement',
        'proposed_industrial_area',
        'proposed_total_proposed_area',
        'proposed_total_built_area',
        'proposed_city_town',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
