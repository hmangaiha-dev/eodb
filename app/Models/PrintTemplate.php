<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\PrintTemplate
 *
 * @property int $id
 * @property string $content
 * @property string $status
 * @property int $application_profile_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ApplicationProfile|null $applicationProfile
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereApplicationProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrintTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrintTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['content','status'];

    public function applicationProfile(): BelongsTo
    {
        return $this->belongsTo(ApplicationProfile::class);
    }
}
