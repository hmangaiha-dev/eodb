<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\StaffPost
 *
 * @property int $id
 * @property int $staff_id
 * @property int $office_id
 * @property \datetime $joining_date
 * @property \datetime|null $leaving_date
 * @property string|null $remark
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereJoiningDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereLeavingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffPost whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StaffPost extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'joining_date', 'leaving_date', 'remark','staff_id','office_id','remark'];
    protected $casts = [
        'joining_date' => 'datetime:Y-m-d H:i:s',
        'leaving_date' => 'datetime:Y-m-d H:i:s',
    ];
}
