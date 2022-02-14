<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
 * @mixin \Eloquent
 */
class Investor extends Authenticatable
{
    const RULES = [
        'full_name' => 'required',
        'password' => 'required:confirmed',
        'email' => 'required',
        'phone' => 'required'
        // 'regn_no'=>'required'
    ];
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['email', 'phone', 'full_name', 'password'];
    protected $hidden = ['password'];


}
