<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PartA
 *
 * @property int $id
 * @property string|null $applicant_type
 * @property string|null $applicant_photo
 * @property string|null $applicant_name
 * @property string|null $applicant_caste
 * @property string|null $country
 * @property string|null $state
 * @property string|null $city_town
 * @property string|null $postal_code
 * @property string|null $address
 * @property string|null $phone_no
 * @property string|null $mobile_no
 * @property string|null $fax_no
 * @property string|null $email
 * @property string|null $alt_email
 * @property string|null $prop_name
 * @property string|null $designation
 * @property string|null $enterprise_name
 * @property string|null $enterprise_type
 * @property string|null $total_directors
 * @property string|null $pan_no
 * @property string|null $pan_card
 * @property string|null $aadhaar_no
 * @property string|null $passport_no
 * @property string|null $is_applicant_nri
 * @property string|null $tin_no
 * @property string|null $tin_cert
 * @property string|null $cst_no
 * @property string|null $cst_cert
 * @property string|null $mou_deed
 * @property string|null $company_reg_cert
 * @property string|null $udyog_memorandum
 * @property int $common_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\CommonApplication|null $commonApplication
 * @method static \Illuminate\Database\Eloquent\Builder|PartA newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartA newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartA query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereAadhaarNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereAltEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereApplicantCaste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereApplicantName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereApplicantPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereApplicantType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCityTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCommonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCompanyRegCert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCstCert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereCstNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereEnterpriseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereEnterpriseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereFaxNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereIsApplicantNri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereMobileNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereMouDeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePanCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePanNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePassportNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA wherePropName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereTinCert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereTinNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereTotalDirectors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereUdyogMemorandum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartA whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PartA extends Model
{
    use HasFactory;

    protected $fillable = [
        'common_id',
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
