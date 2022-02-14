<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Certificate
 *
 * @property int $id
 * @property string $name
 * @property string $remark
 * @property string $type
 * @property string $mime
 * @property string|null $path
 * @property string $owner_type
 * @property int $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_path
 * @property-read Model|\Eloquent $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereMime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereOwnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Certificate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Certificate extends Model
{
    use HasFactory;

    const DISK = 'public';

    protected $fillable = ['name', 'path','remark','mime','type'];
    protected $appends = ['full_path'];


    public function owner(): MorphTo
    {
        return $this->morphTo(name:'owner');
    }

    public function getFullPathAttribute()
    {
        return $url = url('/storage') . '/' . $this->path;
    }
}
