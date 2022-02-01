<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{

    const data = [
        [
            'id'    =>  1,
            'name' => 'Commerce & Industries Department',
            'code' => 'C&E',

        ],
        [
            'id'    =>  2,
            'name' => 'Aizawl Municipal Corporation',
            'code' => 'AMC',
        ],
        [
            'id'    =>  3,
            'name' => 'Environment, Forest & Climate Change Department',
            'code' => 'ENV',
        ],
        [
            'id'    =>  4,
            'name' => 'Excise & Narcotics Department',
            'code' => 'EXCISE',
        ],
        [
            'id'    =>  5,
            'name' => 'Fire & Emergency Services',
            'code' => 'FIRE',
        ],
        [
            'id'    =>  6,
            'name' => 'Food & Drug Administration, H&FW Department',
            'code' => 'FOOD',
        ],
        [
            'id'    =>  7,
            'name' => 'Labour, Skill Development & Entreprenuership',
            'code' => 'LABOUR',
        ],
        [
            'id'    =>  8,
            'name' => 'Land Revenue & Settlement Department',
            'code' => 'LAND',
        ],
        [
            'id'    =>  9,
            'name' => 'Law & Judicial Department',
            'code' => 'LAW',
        ],
        [
            'id'    =>  10,
            'name' => 'Legal Metrology',
            'code' => 'LEGAL',
        ],
        [
            'id'    =>  11,
            'name' => 'Mizoram Pollution Control Board',
            'code' => 'MPCB',
        ],
        [
            'id'    =>  12,
            'name' => 'Power & Electricity Department',
            'code' => 'PED',
        ],
        [
            'id'    =>  13,
            'name' => 'Public Health Engineering Department',
            'code' => 'PHED',
        ],
        [
            'id'    =>  14,
            'name' => 'Public Work Department',
            'code' => 'PWD',
        ],
        [
            'id'    =>  15,
            'name' => 'Taxation Department',
            'code' => 'TAX',
        ],
        [
            'id'    =>  16,
            'name' => 'Urban Development & Proverty Alleviation',
            'code' => 'URBAN',
        ]

    ];

    public function run()
    {
        Office::query()->upsert(self::data, 'id');
    }
}
