<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    const USER_PERMISSIONS = [['name'=>'user:create'],['name'=>'user:read'],['name'=>'user:update'],['name'=>'user:delete']];
    const OFFICE_PERMISSIONS = [['name'=>'office:create'],['name'=> 'office:read'],['name'=> 'office:update'], ['name'=>'office:delete']];
    const ROLE_PERMISSIONS = [['name'=>'role:create'], ['name'=>'role:read'], ['name'=>'role:update'], ['name'=>'role:delete']];
    const STAFF_PERMISSIONS = [['name'=>'staff:posting'],['name' => 'staff:create'], ['name' => 'staff:read'], ['name' => 'staff:update'],
        ['name' => 'staff:delete']];
    public function run()
    {
        $test = array_merge(self::USER_PERMISSIONS, self::OFFICE_PERMISSIONS, self::ROLE_PERMISSIONS, self::STAFF_PERMISSIONS);
        Permission::query()->upsert(
            $test
        ,'name');
    }
}
