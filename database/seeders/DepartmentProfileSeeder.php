<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\DepartmentProfile;
use Illuminate\Database\Seeder;

class DepartmentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    private $profiles = [
        [
            'department_id' => 1,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 2,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 3,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 4,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 5,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 6,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 7,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 8,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 9,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 10,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 11,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 12,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 13,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 14,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 15,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        [
            'department_id' => 16,
            'hod_secratariat_name' => 'Dummy Name',
            'hod_secratariat_designation' => 'Designation',
            'hod_secratariat_photo' => 'sect_photo',
            'hod_directorate_name' => 'Hod',
            'hod_directorate_photo' => 'dict_photo'
        ],
        
    ];
    public function run()
    {
        DepartmentProfile::query()->upsert($this->profiles,'department_id');
    }
}
