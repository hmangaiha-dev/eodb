<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_id'];
    
    public function application()
    {
        return $this->belongsTo(Application::class,'application_id','id');
    }


    public function payment()
    {
        return $this->morphOne(Payment::class, 'owner');
    }
   
    
}
