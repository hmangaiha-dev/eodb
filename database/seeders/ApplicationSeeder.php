<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Department;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Application::truncate();
        $dept = Department::firstWhere('dept_code', 'C&E');

        $dept->applications()->createMany([
            [
                'code' => 'ALLOTMENT_PLOT',
                'how_to_apply' => 'how to apply',
                'name' => 'Allotment of Industrial Plot'
            ],
            [
                'code' => 'CLAIM_INTEREST',
                'how_to_apply' => 'how to apply',
                'name' => 'Application for Claiming Interest Subsidy'
            ],
            [
                'code' => 'CLAIM_CENTRAL_CAPITAL',
                'how_to_apply' => 'how to apply',
                'name' => 'Application form for Claiming Central Capital Investment Subsidy Scheme'
            ],
            [
                'code' => 'CLAIM_SUBSIDY_RENT',
                'how_to_apply' => 'how to apply',
                'name' => 'Application for Claim Of Subsidy On Rent Of Factory Shed'
            ],
            [
                'code' => 'CLAIM_POWER_SUBSIDY',
                'how_to_apply' => 'how to apply',
                'name' => 'Application for Claiming Power Subsidy'
            ],
            [
                'code' => 'SUBSIDY_POWER_GENERATING',
                'how_to_apply' => 'how to apply',
                'name' => 'Application For Subsidy On Power Generating Set'
            ],
            [
                'code' => 'SUBSIDY_POWER_LINE',
                'how_to_apply' => 'how to apply',
                'name' => 'Application For Subsidy On Power Line'
            ]
        ]);
    }
}
