<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::query()->upsert([
            ['full_name'=>'admin','email'=>'admin@email.com','phone'=>'0001234987','password'=>Hash::make('password')],
        ], ['email', 'phone']);


    }
}
