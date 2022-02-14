<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OfficeApplication
 *
 * @property int $id
 * @property int $office_id
 * @property int $application_id
 * @property string $movement
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereMovement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeApplication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OfficeApplication extends Model
{
    use HasFactory;
}
