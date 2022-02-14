<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bamboo
 *
 * @property int $id
 * @property string $year
 * @property string $species
 * @property string $nos
 * @property string $total_bamboo
 * @property string $total_mature
 * @property int $application_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Application|null $application
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereNos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereSpecies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereTotalBamboo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereTotalMature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bamboo whereYear($value)
 * @mixin \Eloquent
 */
class Bamboo extends Model
{
    use HasFactory;

    protected $fillable = ['application_id', 'year', 'species', 'nos','total_bamboo','total_mature'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
