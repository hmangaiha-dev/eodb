<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $full_address
 * @property string|null $locality
 * @property string $pincode
 * @property string $district
 * @property string|null $ps
 * @property string $type
 * @property string $addressable_type
 * @property int $addressable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $addressable
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFullAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BankDetail
 *
 * @property int $id
 * @property string|null $ac_holder
 * @property string|null $mid
 * @property string|null $bank_name
 * @property string|null $ac_no
 * @property string|null $ifsc
 * @property string|null $description
 * @property string $owner_type
 * @property int $owner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $owner
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereAcHolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereAcNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereIfsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereMid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereOwnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankDetail whereUpdatedAt($value)
 */
	class BankDetail extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\ClaimOfSubsidyOnRentOfFactory
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $certificate
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimOfSubsidyOnRentOfFactory whereUserId($value)
 */
	class ClaimOfSubsidyOnRentOfFactory extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\ClaimingCentralCapitalInvestment
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingCentralCapitalInvestment whereUserId($value)
 */
	class ClaimingCentralCapitalInvestment extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\ClaimingInterestSubsidy
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingInterestSubsidy whereUserId($value)
 */
	class ClaimingInterestSubsidy extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\ClaimingPowerSubsidy
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $completion_certificate
 * @property string|null $training_expenditure
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereCompletionCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereTrainingExpenditure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClaimingPowerSubsidy whereUserId($value)
 */
	class ClaimingPowerSubsidy extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\IndustrialPlotAllotment
 *
 * @property int $id
 * @property string|null $reference_no
 * @property int $user_id
 * @property string $body
 * @property string|null $signature
 * @property string|null $copy_of_memorandum
 * @property string|null $copy_of_ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment query()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereCopyOfID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereCopyOfMemorandum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustrialPlotAllotment whereUserId($value)
 */
	class IndustrialPlotAllotment extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\SubsidyOnCostProjectReport
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string|null $cost_of_project
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereCostOfProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnCostProjectReport whereUserId($value)
 */
	class SubsidyOnCostProjectReport extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\SubsidyOnPowerGeneratingSet
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $completion_certificate
 * @property string|null $training_expenditure
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereCompletionCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereTrainingExpenditure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerGeneratingSet whereUserId($value)
 */
	class SubsidyOnPowerGeneratingSet extends \Eloquent {}
}

namespace App\Models\CommerceIndustries{
/**
 * App\Models\CommerceIndustries\SubsidyOnPowerLine
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $completion_certificate
 * @property string|null $training_expenditure
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereCompletionCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereTrainingExpenditure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubsidyOnPowerLine whereUserId($value)
 */
	class SubsidyOnPowerLine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $dept_name
 * @property string $dept_code
 * @property string $slug
 * @property string|null $sect_name
 * @property string|null $dict_name
 * @property string|null $info
 * @property string|null $about_us
 * @property string|null $act_rules
 * @property string|null $other_info
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereAboutUs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereActRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeptCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeptName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDictName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereOtherInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereSectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Investor
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Investor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investor query()
 */
	class Investor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notesheet
 *
 * @property int $id
 * @property string|null $note
 * @property string $noteable_type
 * @property int $noteable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $noteable
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereNoteableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereNoteableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notesheet whereUpdatedAt($value)
 */
	class Notesheet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Office
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $description
 * @property string|null $contact
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BankDetail|null $bankDetail
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StaffPost[] $postings
 * @property-read int|null $postings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Staff[] $staffs
 * @property-read int|null $staffs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 */
	class Office extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OfficeFile
 *
 * @property int $id
 * @property string $file_no
 * @property string|null $subject
 * @property string $fileable_type
 * @property int $fileable_id
 * @property string $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notesheet[] $notesheets
 * @property-read int|null $notesheets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereFileableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OfficeFile whereUpdatedAt($value)
 */
	class OfficeFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OnlineService
 *
 * @property int $id
 * @property int $department_id
 * @property string|null $service_name
 * @property string|null $who_should_apply
 * @property string|null $how_to_apply
 * @property string|null $document_to_submit
 * @property string|null $timeline
 * @property string|null $fees
 * @property string|null $sample_form
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OnlineServiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService query()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereDocumentToSubmit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereHowToApply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereSampleForm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereTimeline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineService whereWhoShouldApply($value)
 */
	class OnlineService extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Otp
 *
 * @property int $id
 * @property int $otp
 * @property int $used
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Otp latestOtp($mobile)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Otp whereUsed($value)
 */
	class Otp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property string $total_investment_limit
 * @property string $company_unit_name
 * @property string $designation
 * @property string $address
 * @property string $country
 * @property string $pincode
 * @property string $email
 * @property string $mobile
 * @property int $finalized
 * @property string $project_details
 * @property string $sector
 * @property string $district
 * @property string $total_investment
 * @property int $employment
 * @property string $commencement_date
 * @property string|null $location
 * @property string|null $city
 * @property string|null $town
 * @property string|null $land
 * @property string|null $power_load
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCommencementDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCompanyUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFinalized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePowerLoad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTotalInvestment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTotalInvestmentLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Office[] $offices
 * @property-read int|null $offices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Office[] $postings
 * @property-read int|null $postings_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Staff
 *
 * @property int $id
 * @property string $full_name
 * @property string|null $designation
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $joined_at
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read mixed $current_post
 * @property-read mixed $permanent_address
 * @property-read mixed $present_address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Office[] $postings
 * @property-read int|null $postings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Staff currentPost()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff query()
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereJoinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staff withCurrentPost()
 */
	class Staff extends \Eloquent {}
}

namespace App\Models{
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
 */
	class StaffPost extends \Eloquent {}
}

namespace App\Models{
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
 */
	class StaffRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Taggable
 *
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
 */
	class Taggable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string|null $phone
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $company_name
 * @property string|null $pan
 * @property string|null $address
 * @property string|null $city
 * @property string|null $district
 * @property string|null $state
 * @property string|null $country
 * @property string|null $pincode
 * @property string|null $mobile
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Department[] $departments
 * @property-read int|null $departments_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\claim_of_subsidy_on_rent_of_factory
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $certificate
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory query()
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claim_of_subsidy_on_rent_of_factory whereUserId($value)
 */
	class claim_of_subsidy_on_rent_of_factory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\claiming_central_captial_investment
 *
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_central_captial_investment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_central_captial_investment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_central_captial_investment query()
 */
	class claiming_central_captial_investment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\claiming_interest_subsidy
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy query()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_interest_subsidy whereUserId($value)
 */
	class claiming_interest_subsidy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\claiming_power_subsidy
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $completion_certificate
 * @property string|null $training_expenditure
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy query()
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereCompletionCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereTrainingExpenditure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|claiming_power_subsidy whereUserId($value)
 */
	class claiming_power_subsidy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\industrial_plot_allotment
 *
 * @property int $id
 * @property string|null $reference_no
 * @property int $user_id
 * @property string $body
 * @property string|null $signature
 * @property string|null $copy_of_memorandum
 * @property string|null $copy_of_ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment query()
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereCopyOfID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereCopyOfMemorandum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereReferenceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|industrial_plot_allotment whereUserId($value)
 */
	class industrial_plot_allotment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\online_service
 *
 * @property int $id
 * @property int $department_id
 * @property string|null $service_name
 * @property string|null $who_should_apply
 * @property string|null $how_to_apply
 * @property string|null $document_to_submit
 * @property string|null $timeline
 * @property string|null $fees
 * @property string|null $sample_form
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|online_service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|online_service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|online_service query()
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereDocumentToSubmit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereHowToApply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereSampleForm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereTimeline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|online_service whereWhoShouldApply($value)
 */
	class online_service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\subsidy_on_power_generating_set
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property string $obligatory_certificate
 * @property string|null $completion_certificate
 * @property string|null $training_expenditure
 * @property string|null $signature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set query()
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereCompletionCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereObligatoryCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereSignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereTrainingExpenditure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|subsidy_on_power_generating_set whereUserId($value)
 */
	class subsidy_on_power_generating_set extends \Eloquent {}
}

