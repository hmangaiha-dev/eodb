<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CommonApplication
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\PartA|null $partA
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommonApplication whereUserId($value)
 * @mixin \Eloquent
 */
class CommonApplication extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','status'];



    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'owner');
    }

    public function partA()
    {
        return $this->hasOne(PartA::class,'common_id','id');

    }
}
