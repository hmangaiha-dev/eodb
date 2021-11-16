<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class KeyBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app = Application::firstWhere('code', 'ALLOTMENT_PLOT');

        $app->keybanks()->createMany([
            [
                'key_name' => 'fname',
                'key_value' => 'First Name',
                'key_type' => 'text',
                'default_value' => 'something'
            ],
            [
                'key_name' => 'lname',
                'key_value' => 'Last Name',
                'key_type' => 'text',
                'default_value' => 'something'
            ]
        ]);
    }
}
