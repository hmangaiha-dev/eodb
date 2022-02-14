<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $dept_name
 * @property string $dept_code
 * @property string $slug
 * @property string|null $sect_name
 * @property string|null $dict_name
 * @property string|null $info
 * @property string|null $about_us
 * @property string|null $act_rules
 * @property string|null $other_info
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DepartmentService[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereAboutUs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereActRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeptCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeptName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDictName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereOtherInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereSectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'dept_code',
        'dept_name',
        'dict_name',
        'sect_name',
        'slug',
        'info',
        'about_us',
        'act_rules',
        'other_info',


    ];
    // protected $guarded = [];



    public function services()
    {
        return $this->hasMany(DepartmentService::class);
    }
}
