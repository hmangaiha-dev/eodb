<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class Address extends Model
{
    const RULES = [
        'full_address' => 'required',
        'locality' => 'required',
        'pincode' => 'required',
        'district' => 'required',
        'ps' => 'required',
    ];
    use HasFactory;

    protected $fillable = ['full_address', 'locality', 'pincode', 'district', 'ps'];

    public function addressable(): MorphTo
    {
        return $this->morphTo(name: 'addressable');
    }
}
