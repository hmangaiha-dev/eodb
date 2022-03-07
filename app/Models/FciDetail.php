<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FciDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'phase',
        'product_category',
        'fci',
        'implementation_date',
    ];

    public function partE()
    {
        return $this->belongsTo(PartE::class,'part_e_id');
    }
}
