<?php

namespace App\Models;

use App\Utils\PostingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
{
    const RULES = [
        'full_name' => 'required',
        'email' => 'required',
        'phone' => 'required|digits:10',
        'password' => 'required|min:6',
        'full_address'=>'required',
        'locality'=>'required',
        'district'=>'required',
        'pincode'=>'required',
    ];
    use HasFactory, HasApiTokens;

    protected $table = 'staffs';
    protected $fillable = ['full_name', 'email', 'phone', 'password','joined_at'];
    protected $appends = ['presentAddress', 'permanentAddress'];

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
        return $this->postings()->where('type', PostingStatus::ON_DUTY)
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
    public function postings(): BelongsToMany
    {
        return $this->belongsToMany(Office::class, table: 'staff_posts')->withPivot(['status','joining_date','leaving_date','remark']);
    }


}
