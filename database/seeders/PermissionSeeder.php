<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    const USER_PERMISSION = ['name'=>'user:create','name'=>'user:read','name'=>'user:update','name'=>'user:delete'];
    const DEPARTMENT_PERMISSION = ['name'=>'department:create','name'=> 'department:read','name'=> 'department:update', 'name'=>'department:delete'];
    const ROLE_PERMISSION = ['name'=>'role:create', 'name'=>'role:read', 'name'=>'role:update', 'name'=>'role:delete'];
    const POSTING_PERMISSION = ['name'=>'posting:create','name'=> 'posting:update'];

    public function run()
    {
        Permission::query()->upsert(self::USER_PERMISSION, 'name');
        Permission::query()->upsert(self::DEPARTMENT_PERMISSION, 'name');
        Permission::query()->upsert(self::ROLE_PERMISSION, 'name');
        Permission::query()->upsert(self::POSTING_PERMISSION, 'name');
    }
}
