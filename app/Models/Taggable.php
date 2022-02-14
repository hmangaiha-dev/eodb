<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Taggable
 *
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
 * @mixin \Eloquent
 */
class Taggable extends Model
{
    use HasFactory;
}
