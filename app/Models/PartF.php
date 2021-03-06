<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartF extends Model
{
    use HasFactory;
    protected $appends = ['manufactureDetails', 'emissionDetails','solidWasteDetails'];
    protected $fillable = [
        'manuf_process_steps',
        'env_category',
        'water_supply_source',
        'water_usage_per_day_process',
        'water_usage_per_day_cooling',
        'water_usage_per_day_domestic',
        'water_usage_per_day_others',
        'water_water_gen_per_day_process',
        'water_water_gen_per_day_cooling',
        'water_water_gen_per_day_domestic',
        'water_water_gen_per_day_others',
        'water_water_treatment_process',
        'water_water_treatment_cooling',
        'water_water_treatment_domestic',
        'water_water_treatment_others',
        // 'waste_water_treatment_details',
        'disposal_mode',
        'trees_cut_no',
        'bamboo_groves_remove_no',
        'need_clearance',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }


    public function getManufactureDetailsAttribute()
    {
        return $this->manufactureDetails()->get();
    }
    public function getEmissionDetailsAttribute()
    {
        return $this->emissionDetails()->get();
    }
    public function getsolidWasteDetailsAttribute()
    {
        return $this->solidWasteDetails()->get();
    }

    public function manufactureDetails()
    {
        return $this->hasMany(ManufactureDetail::class, 'part_f_id');
    }
    public function emissionDetails()
    {
        return $this->hasMany(EmissionData::class, 'part_f_id');
    }
    public function solidWasteDetails()
    {
        return $this->hasMany(SolidWasteGeneration::class, 'part_f_id');
    }
}
