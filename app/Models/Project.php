<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;
}
