<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class KeyBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'key_name',
        'key_value',
        'key_type',
        'default_value'
    ];
}
