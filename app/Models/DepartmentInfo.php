<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentInfo
 *
 * @property int $id
 * @property int $department_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentInfo extends Model
{
    use HasFactory;
}
