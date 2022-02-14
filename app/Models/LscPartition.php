<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LscPartition
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $kum
 * @property string $caste
 * @property int $application_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Application|null $application
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition query()
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereCaste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereKum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LscPartition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LscPartition extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'name', 'address', 'kum','caste'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
