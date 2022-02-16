<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartE extends Model
{
    use HasFactory;

    protected $fillable = [
        'land_cost',
        'building_cost',
        'plant_machinery_cost',
        'misc_cost',
        'total_project_cost',
        'bank_finance',
        'equity_contribution',
        'foreign_direct_invest',
        'subsidy_grant',
        'other_means',
        'direct_male',
        'direct_female',
        'indirect_male',
        'indirect_female',
        'total_male',
        'total_female',
        'project_start',
        'commercial_start',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
