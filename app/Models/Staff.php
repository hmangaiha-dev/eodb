<?php

namespace App\Models;

use App\Utils\PostingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

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
 * @property-read mixed $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Application[] $myApplication
 * @property-read int|null $my_application_count
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
 * @mixin \Eloquent
 */
class Staff extends Authenticatable
{
    const RULES = [
        'full_name' => 'required',
        'email' => 'required',
        'phone' => 'required|digits:10',
        'password' => 'required|min:6',
    ];
    use HasFactory, HasApiTokens;

    protected $table = 'staffs';
    protected $fillable = ['full_name','designation', 'email', 'phone', 'password','joined_at'];
    protected $appends = ['presentAddress', 'permanentAddress','current_post','type'];

    protected $hidden = ['password'];

    public function getTypeAttribute()
    {
        return 'staff';
    }

    public function getPresentAddressAttribute()
    {
        return $this->addresses()->where('type', 'PRESENT')->first();
    }

    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function getPermanentAddressAttribute()
    {
        return $this->addresses()->where('type', 'PERMANENT')->first();
    }

    public function scopeWithCurrentPost($builder)
    {
        $builder->has('postings', function ($q) {
            $q->where('type', PostingStatus::ON_DUTY)
                ->latest()
                ->first();
        });
    }

    public function currentPost()
    {
        return $this->postings()
            ->where('status', PostingStatus::ON_DUTY)
            ->latest()
            ->first();
    }
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'staff_roles');
    }

    public function scopeCurrentPost($builder)
    {
        $builder->whereHas('postings', function ($query) {
            $query->where('status', 'on-duty')
                ->orderBy('staff_posts.id','asc');
        });
    }
    public function getPermissionsName(){

        $perms = [];
        foreach ($this->roles as $role) {
            foreach ($role->permissions as $perm) {
                array_push($perms, $perm['name']);
            }
        }
        return $perms;

    }

    public function getCurrentPostAttribute(){

        return $this->postings()->latest('joining_date')->first();

    }
    public function postings(): BelongsToMany
    {
        return $this->belongsToMany(Office::class, table: 'staff_posts')->withPivot(['status','joining_date','leaving_date','remark']);
    }

    public function myApplication(): BelongsToMany
    {
        return $this->belongsToMany(Application::class, 'application_movements', 'staff_id', 'application_id',);
    }


}
