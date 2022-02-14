<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentProfile
 *
 * @property int $id
 * @property int $department_id
 * @property string|null $hod_secratariat_name
 * @property string|null $hod_secratariat_designation
 * @property string|null $hod_secratariat_photo
 * @property string|null $hod_directorate_name
 * @property string|null $hod_directorate_designation
 * @property string|null $hod_directorate_photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodDirectorateDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodDirectorateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodDirectoratePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodSecratariatDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodSecratariatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereHodSecratariatPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentProfile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentProfile extends Model
{
    use HasFactory;
}
