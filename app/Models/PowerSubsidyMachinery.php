<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerSubsidyMachinery extends Model
{


    use HasFactory;

    protected $fillable = ['detail','kw'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
