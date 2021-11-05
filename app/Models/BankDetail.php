<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class BankDetail extends Model
{
    use HasFactory;

    protected $fillable = ['ac_holder','mid', 'bank_name', 'ac_no', 'ifsc', 'description','owner_id','owner_type'];

    public function owner(): MorphTo
    {
        return $this->morphTo('owner');
    }
}
