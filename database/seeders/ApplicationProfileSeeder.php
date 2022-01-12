<?php

namespace Database\Seeders;

use App\Models\ApplicationProfile;
use Illuminate\Database\Seeder;

class ApplicationProfileSeeder extends Seeder
{
    const DATA = [
        ['code'=>'C&E_ALLOTMENT_PLOT', 'title'=>'APPLICATION FOR ALLOTMENT OF INDUSTRIAL PLOT/SHET AT', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'C&E_INTEREST_SUBSIDY', 'title'=>'APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'C&E_POWER_GENERATING', 'title'=>'APPLICATION FORM FOR CLAIM OF SUBSIDY ON POWER GENERATING', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'C&E_COST_PROJECT', 'title'=>'APPLICATION FOR CLAIM SUBSIDY ON COST OF PROJECT REPORT', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'POWER_NEW_CONNECTION', 'title'=>'Application for - New Connection (Low Tension Service)', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'FIRE_NOC', 'title'=>'APPLICATION FORM FOR OBTAINING N.O.C. FROM FIRE & EMERGENCY SERVICES DEPARTMENT, MIZORAM', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'PWD_ROAD_CUTTING', 'title'=>'APPLICATION FORM FOR GRANTING ROAD CUTTING WITHIN MIZORAM', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'PHE_WATER_CONNECTION', 'title'=>'Application form for Domestic House Water Connection', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'LAND_REVENUE_LAND_HOUSE', 'title'=>' APPLICATION FOR ALLOTMENT OF LAND FOR HOUSE SITE', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'LAND_REVENUE_LAND_SHOP', 'title'=>' APPLICATION FOR ALLOTMENT OF LAND FOR SHOP/STALL', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'LAND_REVENUE_LAND_SETTLEMENT', 'title'=>' APPLICATION FOR RESIDENTIAL LAND SETTLEMENT CERTIFICATE INHMUN/LAND SETTLEMENT CERTIFICATE TURA DILNA', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'LAND_REVENUE_LAND_DIVERSION', 'title'=>' APPLICATION FOR DIVERSION OF USE OF LAND', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'POLLUTION_ACCIDENT_MEDICAL', 'title'=>' ACCIDENT REPORTING FOR BIO-MEDICAL WASTES', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'POLLUTION_ACCIDENT_HAZARDOUS', 'title'=>' ACCIDENT REPORTING FOR HAZARDOUS WASTES', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],
        ['code'=>'POLLUTION_ACCIDENT_SOLIDWASTE', 'title'=>' ACCIDENT REPORTING DUE TO SOLID WASTES', 'remark'=>'Remark', 'office_id'=>1,'operational_type'=>'Post processing'],





  
    ];
    public function run()
    {
        ApplicationProfile::query()->upsert(self::DATA,'code');
    }
}
