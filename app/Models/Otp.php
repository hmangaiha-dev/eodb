<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Otp extends Model
{
    use HasFactory;
    const RULES = [
        'otp' => 'required',
        'phone' => 'required|digits:10',
        'used' => 'required'
    ];

    protected $fillable = ['otp','phone', 'used'];

    public function scopeLatestOtp($builder, $mobile)
    {
        if (isset($mobile)) {
            $builder->latest('created_at')->first();
        }
    }
}
