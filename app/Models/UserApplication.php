<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserApplication
 *
 * @property int $id
 * @property int $key_bank_id
 * @property int $user_id
 * @property string $key_field
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereKeyBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereKeyField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserApplication whereUserId($value)
 * @mixin \Eloquent
 */
class UserApplication extends Model
{
    use HasFactory;
}
