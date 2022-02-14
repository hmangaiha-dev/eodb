<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * App\Models\OfficeFile
 *
 * @property int $id
 * @property string $file_no
 * @property string|null $subject
 * @property string $fileable_type
 * @property int $fileable_id
 * @property string $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notesheet[] $notesheets
 * @property-read int|null $notesheets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OfficeFile extends Model
{
    use HasFactory;

    const RULES = [
        'file_no' => 'required',
        'subject'=>'required',
    ];
    protected $fillable = ['file_no','subject','remarks'];

    public function tags(): MorphToMany
    {
        return $this->morphedByMany(Tag::class, 'taggable', 'taggables');
    }
    public function notesheets(): MorphMany
    {
        return $this->morphMany(Notesheet::class,'noteable');
    }

}
