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
        // \App\Models\User::factory(10)->create();
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            DepartmentServiceSeeder::class,
            ApplicationProfileSeeder::class,
            ServiceCategorySeeder::class,
            InvestorSeeder::class,
            OfficeSeeder::class
        ]);


        // Attachment::factory()->count(3)->create();


        // $app = Application::find(1);

        // $app->attachments()->create([
        //     'original_name' => 'Signature',
        //     'mime' => 'jpg',
        //     'label' => 'Signature of the Applicant',
        //     'size' => '2',
        //     'path' => 'uploads'
        // ]);
    }
}
