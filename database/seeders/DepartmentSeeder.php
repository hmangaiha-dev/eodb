<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    
    private $depts = [
        [
            'id'    =>  1,
            'dept_name' => 'Commerce & Industries Department',
            'slug' => 'commerce-and-industries',
            'dept_code' => 'C&E',
            'sect_name' => 'P. Jawahar',
            'dict_name' => 'J. Hmingthanmawia'

        ],
        [
            'id'    =>  2,
            'dept_name' => 'Aizawl Municipal Corporation',
            'slug' => 'aizawl-municipal-corporation',
            'dept_code' => 'AMC'
        ],
        [
            'id'    =>  3,
            'dept_name' => 'Environment, Forest & Climate Change Department',
            'slug' => 'environment-forest-and-climate-change',
            'dept_code' => 'ENV'
        ],
        [
            'id'    =>  4,
            'dept_name' => 'Excise & Narcotics Department',
            'slug' => 'excise-and-narcotics',
            'dept_code' => 'EXCISE'
        ],
        [
            'id'    =>  5,
            'dept_name' => 'Fire & Emergency Services',
            'slug' => 'fire-and-emergency-services',
            'dept_code' => 'FIRE'
        ],
        [
            'id'    =>  6,
            'dept_name' => 'Food & Drug Administration, H&FW Department',
            'slug' => 'food-and-drug-administration',
            'dept_code' => 'FOOD'
        ],
        [
            'id'    =>  7,
            'dept_name' => 'Labour, Skill Development & Entreprenuership',
            'slug' => 'labour-skill-development-and-entreprise',
            'dept_code' => 'LABOUR'
        ],
        [
            'id'    =>  8,
            'dept_name' => 'Land Revenue & Settlement Department',
            'slug' => 'land-revenue',
            'dept_code' => 'LAND'
        ],
        [
            'id'    =>  9,
            'dept_name' => 'Law & Judicial Department',
            'slug' => 'law-and-judicial',
            'dept_code' => 'LAW'
        ],
        [
            'id'    =>  10,
            'dept_name' => 'Legal Metrology',
            'slug' => 'legal-metrology',
            'dept_code' => 'LEGAL'
        ],
        [
            'id'    =>  11,
            'dept_name' => 'Mizoram Pollution Control Board',
            'slug' => 'pollution-control-board',
            'dept_code' => 'MPCB'
        ],
        [
            'id'    =>  12,
            'dept_name' => 'Power & Electricity Department',
            'slug' => 'power-and-electricity',
            'dept_code' => 'PED'
        ],
        [
            'id'    =>  13,
            'dept_name' => 'Public Health Engineering Department',
            'slug' => 'public-health-engineering',
            'dept_code' => 'PHED'
        ],
        [
            'id'    =>  14,
            'dept_name' => 'Public Work Department',
            'slug' => 'public-work-department',
            'dept_code' => 'PWD'
        ],
        [
            'id'    =>  15,
            'dept_name' => 'Taxation Department',
            'slug' => 'taxation',
            'dept_code' => 'TAX'
        ],
        [
            'id'    =>  16,
            'dept_name' => 'Urban Development & Proverty Alleviation',
            'slug' => 'urban-development-and-proverty-alleviation',
            'dept_code' => 'URBAN'
        ]

    ];

    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */
    public function run()
    {
        // Department::truncate();


        DB::table('departments')->insert($this->depts);
    }
}
