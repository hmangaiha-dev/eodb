<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class OfficeFile extends Model
{
    use HasFactory;

    const RULES = [
        'file_no' => 'required',
        'subject'=>'required',
    ];
    protected $fillable = ['file_no','subject','remarks'];

    public function tags(): MorphToMany
    {
        return $this->morphedByMany(Tag::class, 'taggable', 'taggables');
    }
    public function notesheets(): MorphMany
    {
        return $this->morphMany(Notesheet::class,'noteable');
    }

}
