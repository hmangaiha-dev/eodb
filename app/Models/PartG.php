<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartG extends Model
{
    use HasFactory;

    protected $fillable = [
        'electric_temporary_load_required',
        'electric_temporary_existing_connection',
        // 'electric_temporary_existing_connection_file',
        'electric_temporary_consumer_number',
        'electric_temporary_existing_load_demand_kw',
        'electric_temporary_existing_load_demand_kva',
        'electric_temporary_new_load_demand_kw',
        'electric_temporary_new_load_demand_kVa',
        'electric_temporary_demand_date',
        'electric_regular_load_required',
        'electric_regular_existing_connection',
        // 'electric_regular_existing_connection_file',
        'electric_regular_consumer_type',
        'electric_regular_consumer_number',
        'electric_regular_existing_load_demand_kw',
        'electric_regular_existing_load_demand_kva',
        'electric_regular_new_load_demand_kw',
        'electric_regular_new_load_demand_kva',
        'electric_regular_demand_date',
        'water_temporary_connection_required',
        'water_temporary_existing_connection',
        // 'water_temporary_existing_bill_copy_file',
        'water_regular_connection_required',
        'water_regular_existing_connection',
        // 'water_regular_existing_bill_copy_file',
        'water_regular_consumer_type',
        'water_consumer_number',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
