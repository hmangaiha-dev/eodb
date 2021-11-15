<?php

namespace Database\Seeders;

use App\Models\OnlineService;
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
        // OnlineService::factory()
        $this->call([
            DepartmentSeeder::class,
            InvestorSeeder::class
        ]);
    }
}
