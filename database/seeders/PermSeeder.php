<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Staff;
use App\Models\StaffRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PermSeeder extends Seeder
{

    const ADMIN_ROLE = 1;
    const STAFF_ROLE = 2;
    const INVESTOR_ROLE = 2;

    const ROLES = [
        ['id' => 1, 'name' => 'role:read'],
        ['id' => 2, 'name' => 'role:create'],
        ['id' => 3, 'name' => 'role:edit'],
    ];

    const OFFICE = [
        ['id' => 4, 'name' => 'office:read'],
        ['id' => 5, 'name' => 'office:create'],
        ['id' => 6, 'name' => 'office:edit'],
    ];

    const STAFF = [
        ['id' => 7, 'name' => 'staff:read'],
        ['id' => 8, 'name' => 'staff:create'],
        ['id' => 9, 'name' => 'staff:edit'],
    ];

    const POSTING = [
        ['id' => 10, 'name' => 'posting:read'],
        ['id' => 11, 'name' => 'posting:create'],
    ];
    const APPLICATIONS = [
        ['id' => 12, 'name' => 'ongoing-applications:read'],
        ['id' => 13, 'name' => 'ongoing-applications:detail'],
        ['id' => 14, 'name' => 'application:detail'],
        ['id' => 15, 'name' => 'note:create'],
        ['id' => 16, 'name' => 'note:detail'],
        ['id' => 17, 'name' => 'application:archived'],
    ];
    const WEB = [
        ['id' => 18, 'name' => 'online-service:create'],
        ['id' => 19, 'name' => 'online-service:edit'],
        ['id' => 20, 'name' => 'web:service'],
        ['id' => 21, 'name' => 'web:about'],
        ['id' => 22, 'name' => 'web:act'],
        ['id' => 23, 'name' => 'web:notification'],
        ['id' => 24, 'name' => 'web:other'],
    ];
    const SETTING_PERM = [
        ['id' => 25, 'name' => 'process-flows:read'],
        ['id' => 26, 'name' => 'application-profiles:read'],
        ['id' => 27, 'name' => 'website:update'],
        ['id' => 28, 'name' => 'print-template:create'],
        ['id' => 29, 'name' => 'print-template:edit'],
        ['id' => 30, 'name' => 'process-flows:create'],
    ];
    public function run()
    {
        Permission::query()->upsert(array_merge(
            $this::ROLES,
            $this::OFFICE,
            $this::STAFF,
            $this::POSTING,
            $this::APPLICATIONS,
            $this::WEB,
            $this::SETTING_PERM,
        ), 'id');
        Role::query()->upsert([
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'staff'],
            ['id' => 3, 'name' => 'investor'],
        ], 'id');

        DB::table('role_permissions')->upsert([
            ['id' => 2, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 2],
            ['id' => 3, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 3],
            ['id' => 4, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 4],
            ['id' => 5, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 5],
            ['id' => 6, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 6],
            ['id' => 7, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 7],
            ['id' => 8, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 8],
            ['id' => 9, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 9],
            ['id' => 10, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 10],
            ['id' => 11, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 11],
            ['id' => 12, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 12],
            ['id' => 13, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 13],
            ['id' => 14, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 14],
            ['id' => 15, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 15],
            ['id' => 16, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 16],
            ['id' => 17, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 17],
            ['id' => 18, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 18],
            ['id' => 19, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 19],
            ['id' => 20, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 20],
            ['id' => 21, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 21],
            ['id' => 22, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 22],
            ['id' => 23, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 23],
            ['id' => 24, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 24],
            ['id' => 25, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 25],
            ['id' => 26, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 26],
            ['id' => 27, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 27],
            ['id' => 28, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 28],
            ['id' => 29, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 29],
            ['id' => 30, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 30],

            ['id' => 12, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 12],
            ['id' => 13, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 13],
            ['id' => 14, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 14],
            ['id' => 15, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 15],
            ['id' => 16, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 16],
            ['id' => 17, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 17],
            ['id' => 18, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 18],
            ['id' => 19, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 19],
            ['id' => 20, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 20],
            ['id' => 21, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 21],
            ['id' => 22, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 22],
            ['id' => 23, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 23],
            ['id' => 24, 'role_id' => $this::ADMIN_ROLE, 'permission_id' => 24],
            ['id' => 25, 'role_id' => $this::STAFF_ROLE, 'permission_id' => 1], //added
            ['id' => 24, 'role_id' => $this::STAFF_ROLE, 'permission_id' => 7], //newly added
        ], 'id');
        Staff::query()->upsert([
            ['id' => 1, 'full_name' => 'super', 'email' => 'super@email.com', 'phone' => '0000000000', 'password' => Hash::make('secret')],
            ['id' => 2, 'full_name' => 'staff', 'email' => 'staff@email.com', 'phone' => '1111111111', 'password' => Hash::make('secret')],
            ['id' => 3, 'full_name' => 'investor', 'email' => 'investor@email.com', 'phone' => '2222222222', 'password' => Hash::make('secret')],
        ], 'id');

        StaffRole::query()->upsert([
            ['id' => 1, 'staff_id' => 1, 'role_id' => $this::ADMIN_ROLE], //super
            ['id' => 2, 'staff_id' => 2, 'role_id' => $this::STAFF_ROLE], //staff
            ['id' => 2, 'staff_id' => 2, 'role_id' => $this::ADMIN_ROLE], //added
            ['id' => 3, 'staff_id' => 3, 'role_id' => $this::INVESTOR_ROLE], //investor
            ['id' => 4, 'staff_id' => 1, 'role_id' => $this::STAFF_ROLE], //added
        ], 'id');
    }
}
