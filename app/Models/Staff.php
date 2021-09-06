<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Model
{
    const RULES = [
        'full_name' => 'required',
        'email'=>'required',
        'phone'=>'required|digits:10',
        'password'=>'required|min:6'
    ];
    use HasFactory,HasApiTokens;

    protected $fillable = ['full_name', 'email', 'phone', 'password'];
    protected $appends = ['presentAddress', 'permanentAddress'];

    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function postings(): HasMany
    {
        return $this->hasMany(StaffPosting::class);
    }

    public function getPresentAddressAttribute(){
        return $this->addresses()->where('type', 'PRESENT')->first();
    }

    public function getPermanentAddressAttribute(){
        return $this->addresses()->where('type', 'PERMANENT')->first();
    }



}
