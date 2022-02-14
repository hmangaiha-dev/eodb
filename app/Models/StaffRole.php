<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StaffRole
 *
 * @property int $id
 * @property int $staff_id
 * @property int $role_id
 * @property string|null $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StaffRole extends Model
{
    use HasFactory;
}
