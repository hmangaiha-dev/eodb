<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class Certificate extends Model
{
    use HasFactory;

    const DISK = 'public';

    protected $fillable = ['name', 'path','remark','mime','type'];
    protected $appends = ['full_path','application'];


    public function owner(): MorphTo
    {
        return $this->morphTo(name:'owner');
    }

    public function getApplicationAttribute()
    {
        return $this->owner()->first();
    }

    public function getFullPathAttribute()
    {
        return $url = url('/storage') . '/' . $this->path;
    }
}
