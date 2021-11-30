<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Attachment;
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
        // $this->call([
        //     PermissionSeeder::class,
        //     UserSeeder::class,
        //     ApplicationProfileSeeder::class,
        // ]);


        // Attachment::factory()->count(3)->create();


        $app = Application::find(1);

        $app->attachments()->create([
            'original_name' => 'Signature',
            'mime' => 'jpg',
            'label' => 'Signature of the Applicant',
            'size' => '2',
            'path' => 'uploads'
        ]);
    }
}
