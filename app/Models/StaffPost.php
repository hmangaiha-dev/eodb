<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class StaffPost extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'joining_date', 'leaving_date', 'remark','staff_id','office_id','remark'];
    protected $casts = [
        'joining_date' => 'datetime:Y-m-d H:i:s',
        'leaving_date' => 'datetime:Y-m-d H:i:s',
    ];
}
