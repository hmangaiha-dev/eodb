<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    const ROLE_PERMS = [
        ['name' => 'role:create'], ['name' => 'role:read'], ['name' => 'role:update'], ['name' => 'role:delete'],
    ];
//    const APPLICATION_PERMS = [
//        ['name' => 'common-application:read'], ['name' => 'common-application:verify'], ['name' => 'common-application:reject'],
//        ['name' => 'common-application:approve'],['name' => 'common-application:archive'],['name' => 'common-application:restore'],
//    ];
    const OFFICE_PERMS = [
        ['name' => 'office:create'], ['name' => 'office:read'], ['name' => 'office:update'], ['name' => 'office:delete'],
    ];
    const STAFF_PERMS = [
        ['name' => 'staff:create'], ['name' => 'staff:read'], ['name' => 'staff:update'], ['name' => 'staff:delete'], ['name' => 'staff:posting']
    ];

    const POSTINGS = [
        ['name' => 'posting:read'], ['name' => 'posting:create'], ['name' => 'posting:edit'], ['name' => 'posting:delete']
    ];
//    const CSC_PERMS = [
//        ['name' => 'csc:read'], ['name' => 'csc:create'], ['name' => 'csc:edit'], ['name' => 'csc:delete'],
//        ['name' => 'public-user:read'],['name' => 'public-user:block'],['name' => 'public-user:unblock']
//    ];
    const ACCOUNTING = [
        ['name' => 'transaction:read'], ['name' => 'transaction:post'], ['name' => 'transaction:check'], ['name' => 'transaction:create'],
        ['name' => 'ledger:read'], ['name' => 'ledger-account:read'],
    ];
    const MASTER_DATA_PERMS = [
        ['name' => 'master-data:read'], ['name' => 'master-data:create'], ['name' => 'master-data:update'], ['name' => 'master-data:delete']
    ];

    const WEBSITE_PERMS = [
        ['name' => 'website:read'], ['name' => 'website:create'], ['name' => 'website:update'], ['name' => 'website:delete']
    ];
    const SETTING_PERMS = [
        ['name' => 'setting:read'], ['name' => 'setting:create'], ['name' => 'setting:update'], ['name' => 'setting:delete']
    ];

    public function run()
    {
        DB::transaction(function () {
            $superAdminRole = Role::query()->updateOrCreate(['id'=>1],['id'=>1,'name' => 'super-admin']);
            $permsArray = array_merge(
                self::OFFICE_PERMS,
                self::STAFF_PERMS,
                self::ROLE_PERMS,
                self::POSTINGS,
                self::ACCOUNTING,
                self::MASTER_DATA_PERMS,
                self::WEBSITE_PERMS,
                self::SETTING_PERMS,
            );
//            Permission::query()->upsert($permsArray, 'name');

            $superAdminPerms = collect($permsArray)->map(function ($perm,$index) use ($superAdminRole) {
                return new Permission($perm);
            });
            if (blank($superAdminRole->permissions)) {
                $superAdminRole->permissions()->saveMany($superAdminPerms);
            }
            $superAdmin = Staff::query()->updateOrCreate(['id'=>1],[
                'id'=>1,
                'full_name' => 'super',
                'email' => 'super@email.com',
                'phone' => '9898912344',
                'password' => Hash::make('password'),
            ]);
            $superAdmin->roles()->sync(ids: [$superAdminRole->id]);
        });


    }
}
