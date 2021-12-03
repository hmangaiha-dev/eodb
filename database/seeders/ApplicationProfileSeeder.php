<?php

namespace Database\Seeders;

use App\Models\ApplicationProfile;
use Illuminate\Database\Seeder;

class ApplicationProfileSeeder extends Seeder
{
    const DATA = [
        ['code'=>'CODE1', 'title'=>'Application one', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'C&E_INTEREST_SUBSIDY', 'title'=>'APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'POWER_NEW_CONNECTION', 'title'=>'Application for – New Connection (Low Tension Service)', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'CODE3', 'title'=>'Application three', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
    ];
    public function run()
    {
        ApplicationProfile::query()->upsert(self::DATA, 'code');
    }
}
