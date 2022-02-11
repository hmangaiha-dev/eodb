<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth;

class CommonApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::find(2);

        $common = $user->commonApplications()->create([
            'status' => 'partA'
        ]);
        // dd($common->partA);


        $common->partA()->create([
            'applicant_type' => $faker->sentence,
            //applicant_photo => $faker->sentence,
            'applicant_name' => $faker->sentence,
            'applicant_caste' => $faker->sentence,
            'country' => $faker->sentence,
            'state' => $faker->sentence,
            'city_town' => $faker->sentence,
            'postal_code' => $faker->sentence,
            'address' => $faker->sentence,
            'phone_no' => $faker->sentence,
            'mobile_no' => $faker->sentence,
            'fax_no' => $faker->sentence,
            'email' => $faker->sentence,
            'alt_email' => $faker->sentence,
            'prop_name' => $faker->sentence,
            'designation' => $faker->sentence,
            'enterprise_name' => $faker->sentence,
            'enterprise_type' => $faker->sentence,
            'total_directors' => $faker->sentence,
            'pan_no' => $faker->sentence,
            'pan_card' => $faker->sentence,
            'aadhaar_no' => $faker->sentence,
            'passport_no' => $faker->sentence,
            'is_applicant_nri' => $faker->sentence,
            'tin_no' => $faker->sentence,
            //tin_cert => $faker->sentence,
            'cst_no' => $faker->sentence,
        ]);



        
    }
}
