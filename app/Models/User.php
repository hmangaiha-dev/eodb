<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Application[] $applications
 * @property-read int|null $applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CommonApplication[] $commonApplications
 * @property-read int|null $common_applications_count
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
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;

    const RULES = [
        'full_name' => 'required',
        'password' => 'required:confirmed',
        'email' => 'required',
        'phone' => 'required'
        // 'regn_no'=>'required'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(UserPosting::class);
    }
    public function departments(){
        return $this->belongsToMany(Department::class, 'user_postings');
    }
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_postings');
    }

    public function canDo(String $permFullName){
        $result=explode(':', $permFullName);
        $departmentCode=$result[0];
        $action = $result[1];

        $canAction = false;
        $sameDepartment = false;

        if (!$this->departments()->exists()) {
            return false;
        }
        $departments = $this->departments();
        foreach ($departments as $department) {
            if ($department->code === $departmentCode) {
                $sameDepartment = true;
                break;
            }
        }
        $roles=$this->roles();
        foreach ($roles as $role) {
            foreach ($role->permissions as $perms) {
                if ($perms->name == $action){
                    $canAction = true;
                    break;
                }

            }
        }
        return $sameDepartment && $canAction;
    }

    public function applications()
    {
        return $this->hasMany(Application::class,'user_id','id');
    }
    public function commonApplications()
    {
        return $this->hasMany(CommonApplication::class,'user_id','id');
    }

    
}
