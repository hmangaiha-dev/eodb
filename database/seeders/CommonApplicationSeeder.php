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


        // User::query()->updateOrCreate()

        $user = User::find(2);

        $common = $user->commonApplications()->updateOrCreate(
            [
                'status' => 'partA'
            ],
            ['status' => 'partA']
        );
        // dd($common->partA);


        $common->partA()->create([
            'applicant_type' => $faker->sentence,
            'applicant_photo' => $faker->image('/public/storage/common', 640, 480, null, false),
            'applicant_name' => $faker->name,
            'applicant_caste' => 'SC/ST',
            'country' => $faker->country,
            'state' => 'Aizawl',
            'city_town' => $faker->city,
            'postal_code' => $faker->postcode,
            'address' => $faker->address,
            'phone_no' => $faker->phoneNumber,
            'mobile_no' => $faker->phoneNumber,
            'fax_no' => $faker->randomNumber,
            'email' => $faker->email,
            'alt_email' => $faker->email,
            'prop_name' => $faker->name,
            'designation' => $faker->word,
            'enterprise_name' => $faker->company,
            'enterprise_type' => "Partnership",
            'total_directors' => $faker->name,
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
