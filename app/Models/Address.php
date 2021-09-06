<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['full_address', 'locality', 'pincode', 'district', 'ps'];

    public function addressable(): MorphTo
    {
        return $this->morphTo(name: 'addressable');
    }
}
