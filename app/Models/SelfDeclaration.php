<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfDeclaration extends Model
{
    use HasFactory;

    protected $fillable = [
        'declaration_signature',
        'declaration_applicant_name',
        'declaration_application_date',
        'declaration_designation',
    ];

    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class, 'common_id');
    }
}
