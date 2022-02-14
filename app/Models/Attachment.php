<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Attachment
 *
 * @property int $id
 * @property string $original_name
 * @property string $mime
 * @property string|null $label
 * @property int $size
 * @property string $path
 * @property string|null $owner_type
 * @property int|null $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_path
 * @property-read Model|\Eloquent $owner
 * @method static \Database\Factories\AttachmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereMime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereOwnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attachment extends Model
{
    use HasFactory;

    const DISK = 'public';
    protected $fillable = ['mime', 'original_name', 'label', 'size', 'path'];
    protected $appends = ['full_path'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
    public function getFullPathAttribute()
    {
        return $url = url('/storage') . '/' . $this->path;
    }
}
