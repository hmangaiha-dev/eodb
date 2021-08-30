<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Investor extends Authenticatable
{
    const RULES = [
        'fullname' => 'required',
        'password' => 'required:confirmed',
        'email' => 'required',
        'regn_no'=>'required'
    ];
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['email', 'mobile', 'fullname', 'password'];
    protected $hidden = ['password'];


}
