<?php

namespace Database\Seeders;

use App\Models\User;
use Auth;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DinDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::find(1);

        // dd($user);

        return $user->commonApplications()->first()->partA()->first()->dinDetails()->create([
            'number' => $faker->randomNumber,
            'qualification' => 'B.Ed',
            'association_year' => $faker->year,
            'experience_year' => $faker->year,
        ]);
            // ->with(
            //     ['partA', 'partB', 'partC', 'partD', 'partE', 'partF', 'partG', 'selfDeclaration']
            // )->first();


    }
}
