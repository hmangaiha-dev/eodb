<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonApplication extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','status'];



    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'owner');
    }

    public function partA()
    {
        return $this->hasOne(PartA::class,'common_id','id');

    }
}
