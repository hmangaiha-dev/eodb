<?php

namespace App\Models;

use App\Utils\PostingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'password' => 'required|min:6'
    ];
    use HasFactory, HasApiTokens;

    protected $table = 'staffs';
    protected $fillable = ['full_name', 'email', 'phone', 'password'];
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

    public function postings(): HasMany
    {
        return $this->hasMany(StaffPosting::class);
    }

}
