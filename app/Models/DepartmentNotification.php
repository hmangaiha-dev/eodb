<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentNotification
 *
 * @property int $id
 * @property int|null $department_id
 * @property string|null $notification_no
 * @property string|null $subject
 * @property string|null $issuing_authority
 * @property string|null $notification_file
 * @property string|null $notification_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereIssuingAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereNotificationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereNotificationFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereNotificationNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentNotification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentNotification extends Model
{
    use HasFactory;
}
