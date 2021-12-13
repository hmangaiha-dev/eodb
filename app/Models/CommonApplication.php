<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonApplication extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','body'];



    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'owner');
    }
}
