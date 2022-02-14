<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Otp
 *
 * @property int $id
 * @property int $otp
 * @property int $used
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Otp latestOtp($mobile)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereUsed($value)
 * @mixin \Eloquent
 */
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
