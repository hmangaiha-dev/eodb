<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Service extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title', 'remark', 'office_id','operational_type'];
}
