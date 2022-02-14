<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ApplicationValue
 *
 * @property int $id
 * @property string|null $field_key
 * @property string|null $field_value
 * @property string|null $field_label
 * @property int $application_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Application|null $application
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereFieldKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereFieldLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereFieldValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationValue whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ApplicationValue extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'field_key', 'field_value', 'field_label'];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
