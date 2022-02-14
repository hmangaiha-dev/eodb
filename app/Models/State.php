<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property string|null $remark
 * @property string $owner_type
 * @property int $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attachment|null $attachment
 * @property-read Model|\Eloquent $owner
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereOwnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    const SUBMITTED='Submitted';
    const VERIFIED='Verified';
    const REJECTED='Rejected';
    const APPROVED='Approved';

    use HasFactory;

    protected $fillable = ['name', 'remark','owner'];
    protected $with = ['attachment'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }

    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'owner');
    }
}
