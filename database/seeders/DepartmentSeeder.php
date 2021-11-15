<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    private $depts = [
        [
            'id'    =>  1,
            'department_name' => 'Commerce & Industries Department',
            'slug' => 'commerce-and-industries-department',
        ],
        [
            'id'    =>  2,
            'department_name' => 'Aizawl Municipal Corporation',
            'slug' => 'aizawl-municipal-corporation',
        ],
        [
            'id'    =>  3,
            'department_name' => 'Environment, Forest & Climate Change Department',
            'slug' => 'environment-forest-and-climate-change-department',
        ],
        [
            'id'    =>  4,
            'department_name' => 'Excise & Narcotics Department',
            'slug' => 'excise-and-narcotics-department',
        ],
        [
            'id'    =>  5,
            'department_name' => 'Fire & Emergency Services',
            'slug' => 'fire-and-emergency-services',
        ],
        [
            'id'    =>  6,
            'department_name' => 'Food & Drug Administration, H&FW Department',
            'slug' => 'food-and-drug-administration-handfw-department',
        ],
        [
            'id'    =>  7,
            'department_name' => 'Labour, Skill Development & Entreprenuership',
            'slug' => 'labour-skill-development-and-entreprenuership',
        ],
        [
            'id'    =>  8,
            'department_name' => 'Land Revenue & Settlement Department',
            'slug' => 'land-revenue-and-settlement-department',
        ],
        [
            'id'    =>  9,
            'department_name' => 'Law & Judicial Department',
            'slug' => 'law-and-judicial-department',
        ],
        [
            'id'    =>  10,
            'department_name' => 'Legal Metrology',
            'slug' => 'legal-metrology',
        ],
        [
            'id'    =>  11,
            'department_name' => 'Mizoram Pollution Control Board',
            'slug' => 'mizoram-pollution-control-board',
        ],
        [
            'id'    =>  12,
            'department_name' => 'Power & Electricity Department',
            'slug' => 'power-and-electricity-department',
        ],
        [
            'id'    =>  13,
            'department_name' => 'Public Health Engineering Department',
            'slug' => 'public-health-engineering-department',
        ],
        [
            'id'    =>  14,
            'department_name' => 'Public Work Department',
            'slug' => 'public-work-department',
        ],
        [
            'id'    =>  15,
            'department_name' => 'Taxation Department',
            'slug' => 'taxation-department',
        ],
        [
            'id'    =>  16,
            'department_name' => 'Urban Development & Proverty Alleviation',
            'slug' => 'urban-development-and-proverty-alleviation',
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

        DB::table('departments')->insert($this->depts);
    }
}
