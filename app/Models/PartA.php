<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PartA extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'common_id',
        'applicant_type',
        // 'applicant_photo',
        'applicant_name',
        'applicant_caste',
        'country',
        'state',
        'city_town',
        'postal_code',
        'address',
        'phone_no',
        'mobile_no',
        'fax_no',
        'email',
        'alt_email',
        'prop_name',
        'designation',
        'enterprise_name',
        'enterprise_type',
        'total_directors',
        'pan_no',
        // 'pan_card',
        'aadhaar_no',
        'passport_no',
        'is_applicant_nri',
        'tin_no',
        // 'tin_cert',
        'cst_no',
        // 'cst_cert',
        // 'mou_deed',
        // 'company_reg_cert',
        // 'udyog_memorandum',
    ];


    public function commonApplication()
    {
        return $this->belongsTo(CommonApplication::class,'common_id');

    }
}
