<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentActRule
 *
 * @property int $id
 * @property int|null $department_id
 * @property string|null $name
 * @property string|null $copy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereCopy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentActRule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentActRule extends Model
{
    use HasFactory;
}
