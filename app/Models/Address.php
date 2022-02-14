<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $full_address
 * @property string|null $locality
 * @property string $pincode
 * @property string $district
 * @property string|null $ps
 * @property string $type
 * @property string $addressable_type
 * @property int $addressable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $addressable
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFullAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
