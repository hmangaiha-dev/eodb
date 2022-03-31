<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $appends = ['services'];

    protected $fillable = [
        'txn_date',
        'txn_id',
        'payment_mode',
        'status',
    ];



    public function owner()
    {
        return $this->morphTo('owner');
    }

    public function getServicesAttribute()
    {
        return $this->owner()->first();
    }
}
