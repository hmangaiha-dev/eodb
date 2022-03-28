<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }

    public static function extractPermissions(Staff $staff){
        $post=$staff->currentPost();
        return $post->roles()->get()->map(function (Role $role) {
            return$role->permissions()->get()?->toArray();
        });
    }
}
