<?php

namespace Database\Seeders;

use App\Models\ApplicationProfile;
use Illuminate\Database\Seeder;

class ApplicationProfileSeeder extends Seeder
{
    const DATA = [
        ['code'=>'CODE1', 'title'=>'title one', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'CODE2', 'title'=>'title two', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'CODE3', 'title'=>'title three', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
    ];
    public function run()
    {
        ApplicationProfile::query()->upsert(self::DATA, 'code');
    }
}
