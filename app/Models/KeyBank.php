<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\KeyBank
 *
 * @property int $id
 * @property string $key_name
 * @property string $key_value
 * @property string $key_type
 * @property int $application_id
 * @property string|null $default_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank query()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereDefaultValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereKeyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereKeyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereKeyValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyBank whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class KeyBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'key_name',
        'key_value',
        'key_type',
        'default_value'
    ];
}
