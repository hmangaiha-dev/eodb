<?php

namespace Database\Seeders;

// use App\Models\ServiceCategory;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const categories = [
        [
            'id' => 1,
            'name' => 'PRE-ESTABLISHMENT',
            'code' => 'PRE-EST'
        ],
        [
            'id' => 2,
            'name' => 'POST-ESTABLISHMENT',
            'code' => 'PST-EST'
        ],
        [
            'id' => 3,
            'name' => 'POST-COMMENCEMENT',
            'code' => 'PST-COM'
        ],
        [
            'id' => 4,
            'name' => 'PRE-OPERATION',
            'code' => 'PRE-OPR'
        ],
        [
            'id' => 5,
            'name' => 'POST-OPERATION',
            'code' => 'PST-OPR'
        ]

    ];
    public function run()
    {
//        ServiceCategory::query()->upsert(self::categories,'code');

    }
}
