<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartD extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_sector',
        'project_purpose',
        'industry_size',
        'project_type',
        'project_category',
        'foreign_investor_name',
        'foreign_investor_country',
        'foreign_investor_address',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
