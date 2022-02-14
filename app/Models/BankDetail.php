<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
 * @property-read Model|\Eloquent $owner
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
 * @mixin \Eloquent
 */
class BankDetail extends Model
{
    use HasFactory;

    protected $fillable = ['ac_holder','mid', 'bank_name', 'ac_no', 'ifsc', 'description','owner_id','owner_type'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
}
