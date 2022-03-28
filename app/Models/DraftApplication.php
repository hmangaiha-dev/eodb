<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftApplication extends Model
{
    use HasFactory;
    
    protected $appends = ['profile'];
    protected $fillable = ['draft','route'];

    public function application()
    {
        return $this->belongsTo(Application::class,'application_id','id');
    }

    public function getProfileAttribute()
    {
        return $this->application()->first();
    }
}
