<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'code',
        'how_to_apply'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function keybanks()
    {
        return $this->hasMany(KeyBank::class);
    }
}
