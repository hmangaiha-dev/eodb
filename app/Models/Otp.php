<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;
    const RULES = [
        'otp' => 'required',
        'mobile' => 'required',
        'used' => 'required'
    ];

    protected $fillable = ['otp','mobile', 'used'];

    public function scopeLatestOtp($builder, $mobile)
    {
        if (isset($mobile)) {
            $builder->latest('created_at')->first();
        }
    }
}
