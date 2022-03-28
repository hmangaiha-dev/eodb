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
    public function partB()
    {
        return $this->hasOne(PartB::class,'common_id','id');

    }
    public function partC()
    {
        return $this->hasOne(PartC::class,'common_id','id');

    }
    public function partD()
    {
        return $this->hasOne(PartD::class,'common_id','id');

    }
    public function partE()
    {
        return $this->hasOne(PartE::class,'common_id','id');

    }
    public function partF()
    {
        return $this->hasOne(PartF::class,'common_id','id');

    }
    public function partG()
    {
        return $this->hasOne(PartG::class,'common_id','id');

    }
    public function selfDeclaration()
    {
        return $this->hasOne(SelfDeclaration::class,'common_id','id');

    }
}
