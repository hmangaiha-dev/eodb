<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufactureDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'raw_material',
        'raw_quantity',
        'units_ton_per_day',
        'main_product',
        'main_product_quantity',
        'units_number_per_day',
    ];


    public function partF()
    {
        return $this->belongsTo(PartF::class,'part_f_id');
    }
}
