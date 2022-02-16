<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Attachment;
use App\Models\Department;
use App\Models\DepartmentService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            PermissionSeeder::class,
//            UserSeeder::class,
            PermSeeder::class,
            DepartmentSeeder::class,
            DepartmentServiceSeeder::class,
            ApplicationProfileSeeder::class,
//            ServiceCategorySeeder::class,
            InvestorSeeder::class,
            OfficeSeeder::class
        ]);
    }
}
