<?php

namespace Database\Seeders;

use App\Models\ApplicationProfile;
use Illuminate\Database\Seeder;

class ApplicationProfileSeeder extends Seeder
{
    const DATA = [
        ['code' => 'C&E_ALLOTMENT_PLOT', 'title' => 'APPLICATION FOR ALLOTMENT OF INDUSTRIAL PLOT/SHET AT', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_INTEREST_SUBSIDY', 'title' => 'APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_POWER_GENERATING', 'title' => 'APPLICATION FORM FOR CLAIM OF SUBSIDY ON POWER GENERATING', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_COST_PROJECT', 'title' => 'APPLICATION FOR CLAIM SUBSIDY ON COST OF PROJECT REPORT', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_NEW_CONNECTION', 'title' => 'Application for - New Connection (Low Tension Service)', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'FIRE_NOC', 'title' => 'APPLICATION FORM FOR OBTAINING N.O.C. FROM FIRE & EMERGENCY SERVICES DEPARTMENT, MIZORAM', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'PWD_ROAD_CUTTING', 'title' => 'APPLICATION FORM FOR GRANTING ROAD CUTTING WITHIN MIZORAM', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_WATER_CONNECTION', 'title' => 'Application form for Domestic House Water Connection', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_WATER_TRANSFER', 'title' => 'APPLICATION FOR TRANSFER OF HOUSE WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],        
        ['code' => 'PHE_CHANGE_NAME', 'title' => 'APPLICATION FORM FOR CHANGING OF NAME/OWNERSHIP OF CONSUMER', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],        
        ['code' => 'PHE_RECONNECTION', 'title' => 'APPLICATION FORM FOR RE-CONNECTION OF TEMPORARY DISCONNECTED WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],        
        ['code' => 'PHE_DISCONNECTION', 'title' => 'APPLICATION FORM FOR DISCONNECTION OF WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],        
        ['code' => 'LAND_REVENUE_LAND_HOUSE', 'title' => ' APPLICATION FOR ALLOTMENT OF LAND FOR HOUSE SITE', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_SHOP', 'title' => ' APPLICATION FOR ALLOTMENT OF LAND FOR SHOP/STALL', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_SETTLEMENT', 'title' => ' APPLICATION FOR RESIDENTIAL LAND SETTLEMENT CERTIFICATE INHMUN/LAND SETTLEMENT CERTIFICATE TURA DILNA', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_DIVERSION', 'title' => ' APPLICATION FOR DIVERSION OF USE OF LAND', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_MEDICAL', 'title' => ' ACCIDENT REPORTING FOR BIO-MEDICAL WASTES', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_HAZARDOUS', 'title' => ' ACCIDENT REPORTING FOR HAZARDOUS WASTES', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_SOLIDWASTE', 'title' => ' ACCIDENT REPORTING DUE TO SOLID WASTES', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_GENERAL_RETAIL', 'title' => ' Application For Grant Or Renewal Of A [License To Sell, Stock, Exhibit Or Offer For Sale, Or Distribute] Drugs Other Than Those Specified In Schedule X', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_RESTRICTED_RETAIL', 'title' => '  APPLICATION FOR GRANT OR RENEWAL OF A (LICENCE TO SELL, STOCK, EXHIBIT OR OFFER FOR SALE, OR DISTRIBUTE) HOMOEOPATHIC MEDICINES', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_WHOLESALE', 'title' => ' Application For Grant Or Renewal Of A [License To Sell, Stock, Exhibit Or Offer For Sale, Or Distribute] Drugs Other Than Those Specified In Schedule X', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_FORM19AA', 'title' => 'APPLICATION FOR GRANT OR RENEWAL OF [LICENCE TO SELL, STOCK OR EXHIBIT OR OFFER FOR SALE BY WHOLESALE OR DISTRIBUTE] DRUGS FROM A MOTOR VEHICLE', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'ENV_FOREST_FELL_TREES', 'title' => 'APPLICATION FOR PERMISSION TO FELL TREES/TREE PLANTATION IN NON-FOREST AREA', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_CHANGE_NAME', 'title' => ' Application Form - Change in Name of Registered Consumer', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_OWNERSHIP_TRANSFER', 'title' => 'Application Form - Transfer of Ownership to Legal Heir', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_CONVERSION_SERVICE', 'title' => ' Application form - Conversion of Services / Change of Consumer Category / Shifting of Connection', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_LOAD_ENC_RDC', 'title' => 'Load Enhancement / Load Reduction Form', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_METER_COMPLAINTS', 'title' => 'Meter Related Complaints / Request for Testing of Meter', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_DISCONNECTION', 'title' => 'Request for Permanent Disconnection & Termination of Agreement', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_EMPLOYMENT_CONTRACT', 'title' => 'REGISTRATION OF ESTABLISHMENT EMPLOYING CONTRACT LABOUR', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_CONTRACT_LICENCE', 'title' => 'APPLICATION FOR CONTRACT LABOUR LICENCE', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],


        
        







        





    ];
    public function run()
    {
        ApplicationProfile::query()->upsert(self::DATA, 'code');
    }
}
