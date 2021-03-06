<?php

namespace Database\Seeders;

use App\Models\ApplicationProfile;
// use HmangaihaSeeder;
// use HmangaihaSeeder;
use Illuminate\Database\Seeder;


class ApplicationProfileSeeder extends Seeder
{
    const DATA = [
        ...HmangaihaSeeder::DATA,
        ['code' => 'C&E_ALLOTMENT_PLOT', 'title' => 'APPLICATION FOR ALLOTMENT OF INDUSTRIAL PLOT/SHET AT', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_FACTORY_SHED', 'title' => ' CENTRAL COMPREHENSIVE INSURANCE SUBSIDY SCHEME, 2007(Factory Shed)', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_INTEREST_SUBSIDY', 'title' => 'APPLICATION FORM FOR CLAIMING CENTRAL INTEREST SUBSIDY SCHEME', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_POWER_GENERATING', 'title' => 'APPLICATION FORM FOR CLAIM OF SUBSIDY ON POWER GENERATING', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_POWER_LINE', 'title' => 'APPLICATION FORM FOR CLAIM OF SUBSIDY ON POWER GENERATING(Line)', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_FORM_9', 'title' => 'APPLICATION FOR CLAIM OF INTEREST SUBSIDY(COMMERCE INDUSTRIES - FORM9)', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_FORM_3', 'title' => 'CLAIMING OF CENTRAL CAPITAL INVESTMENT SUBSIDY(COMMERCE INDUSTRIES - FORM3)', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_COST_PROJECT', 'title' => 'APPLICATION FOR CLAIM SUBSIDY ON COST OF PROJECT REPORT', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'C&E_POWER_SUBSIDY', 'title' => 'Application for Claiming Power Subsidy', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],

        ['code' => 'POWER_NEW_CONNECTION', 'title' => 'Application for - New Connection (Low Tension Service)', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_NEW_CONNECTION2', 'title' => 'New Connection (High Tension / Extra High-Tension Service)', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_CHANGE_NAME', 'title' => ' Application Form - Change in Name of Registered Consumer', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_OWNERSHIP_TRANSFER', 'title' => 'Application Form - Transfer of Ownership to Legal Heir', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_CONVERSION_SERVICE', 'title' => 'Application form - Conversion of Services / Change of Consumer Category / Shifting of Connection', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_LOAD_ENC_RDC', 'title' => 'Load Enhancement / Load Reduction Form', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_METER_COMPLAINTS', 'title' => 'Meter Related Complaints / Request for Testing of Meter', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],
        ['code' => 'POWER_DISCONNECTION', 'title' => 'Request for Permanent Disconnection & Termination of Agreement', 'remark' => 'Remark', 'office_id' => 12, 'operational_type' => 'Post processing'],


        ['code' => 'FIRE_NOC', 'title' => 'APPLICATION FORM FOR OBTAINING N.O.C. FROM FIRE & EMERGENCY SERVICES DEPARTMENT, MIZORAM', 'remark' => 'Remark', 'office_id' => 5, 'operational_type' => 'Post processing'],

        ['code' => 'PWD_ROAD_CUTTING', 'title' => 'GRANTING ROAD CUTTING WITHIN MIZORAM', 'remark' => 'Remark', 'office_id' => 14, 'operational_type' => 'Post processing'],
        ['code' => 'PWD_NOC', 'title' => 'ISSUE OF NOC ALONG ROW WITHIN MIZORAM', 'remark' => 'Remark', 'office_id' => 14, 'operational_type' => 'Post processing'],

        ['code' => 'PHE_WATER_CONNECTION', 'title' => 'Application form for Domestic House Water Connection', 'remark' => 'Remark', 'office_id' => 13, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_WATER_TRANSFER', 'title' => 'APPLICATION FOR TRANSFER OF HOUSE WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 13, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_CHANGE_NAME', 'title' => 'APPLICATION FORM FOR CHANGING OF NAME/OWNERSHIP OF CONSUMER', 'remark' => 'Remark', 'office_id' => 13, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_RECONNECTION', 'title' => 'APPLICATION FORM FOR RE-CONNECTION OF TEMPORARY DISCONNECTED WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 13, 'operational_type' => 'Post processing'],
        ['code' => 'PHE_DISCONNECTION', 'title' => 'APPLICATION FORM FOR DISCONNECTION OF WATER CONNECTION', 'remark' => 'Remark', 'office_id' => 13, 'operational_type' => 'Post processing'],

        ['code' => 'LAND_REVENUE_LAND_HOUSE', 'title' => 'APPLICATION FOR ALLOTMENT OF LAND FOR HOUSE SITE', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_SHOP', 'title' => 'APPLICATION FOR ALLOTMENT OF LAND FOR SHOP/STALL', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_SETTLEMENT', 'title' => 'APPLICATION FOR RESIDENTIAL LAND SETTLEMENT CERTIFICATE INHMUN/LAND SETTLEMENT CERTIFICATE TURA DILNA', 'remark' => 'Remark', 'office_id' => 1, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_DIVERSION', 'title' => 'APPLICATION FOR DIVERSION OF USE OF LAND', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LAND_TRANSFER', 'title' => 'APPLICATION FOR TRANSFER OF OWNERSHIP OF LAND HOLDING', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_ALLOTMENT_GOVERNMENT', 'title' => 'APPLICATION FOR THE ALLOTMENT OF LAND TO THE GOVERNMENT DEPARTMENT/CORPORATION/BOARDS ETC. ON LAND LEASE/LIMITED LEASE', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_LSC', 'title' => 'APPLICATION FOR PARTITION OF LSC', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],
        ['code' => 'LAND_REVENUE_PATTA', 'title' => 'PERIODIC PATTA (PERIODIC PATTA DILNA)', 'remark' => 'Remark', 'office_id' => 8, 'operational_type' => 'Post processing'],

        ['code' => 'POLLUTION_CONSENT_INDUSTRIES', 'title' => 'CONSENT FOR ESTABLISHMENT OF INDUSTRIES ETC', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_MEDICAL', 'title' => 'ACCIDENT REPORTING FOR BIO-MEDICAL WASTES', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_HAZARDOUS', 'title' => 'ACCIDENT REPORTING FOR HAZARDOUS WASTES', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_ACCIDENT_SOLIDWASTE', 'title' => 'ACCIDENT REPORTING DUE TO SOLID WASTES', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_AUTHORISE_SOLID_WASTE', 'title' => 'APPLICATION FOR OBTAINING AUTHORISATION UNDER SOLID WASTE MANAGEMENT RULES', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_PRODUCER_BRAND', 'title' => 'APPLICATION FOR REGISTRATION FOR PRODUCERS or BRAND OWNERS', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_5', 'title' => ' ANNUAL REPORT (Pollution Control Board)', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_11', 'title' => 'Application Form for Registration of Units Engaged in Processing or Recycling of Plastic Waste', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_12', 'title' => 'APPLICATION FOR REGISTRATION FOR MANUFACTURERS OF PLASTIC RAW MATERIALS', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_13', 'title' => 'FORMAT OF ANNUAL REPORT BY OPERATOR OF PLASTIC WASTE PROCESSING OR RECYCLING FACILITY TO THE LOCAL BODY', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_14', 'title' => 'FORMAT FOR ANNUAL REPORT ON PLASTIC WASTE MANAGEMENT TO BE SUBMITTED BY THE LOCAL BODY', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_15', 'title' => 'FORM FOR REGISTRATION OF DEALERS', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_16', 'title' => 'FORM FOR REGISTRATION OF IMPORTER OF NEW LEAD ACID BATTERIES / PRIMARY LEAD', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_17', 'title' => 'Application For Obtaining Authorization Under Construction & Demolition Waste', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_18', 'title' => 'FORM FOR FILING RETURNS BY AUCTIONEER OF USED BATTERIES', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_19', 'title' => 'APPLICATION FOR AUTHORISATION OR RENEWAL OF AUTHORISATION', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],
        ['code' => 'POLLUTION_FORM_8', 'title' => 'ANNUAL REPORT TO BE SUBMITTED BY THE OPERATOR OF FACILITY TO THE LOCAL BODY(POLLUTION FORM 9)', 'remark' => 'Remark', 'office_id' => 11, 'operational_type' => 'Post processing'],


        ['code' => 'FOOD_DRUG_GENERAL_RETAIL', 'title' => 'Application For Grant Or Renewal Of A [License To Sell, Stock, Exhibit Or Offer For Sale, Or Distribute] Drugs Other Than Those Specified In Schedule X', 'remark' => 'Remark', 'office_id' => 6, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_RESTRICTED_RETAIL', 'title' => 'APPLICATION FOR GRANT OR RENEWAL OF A (LICENCE TO SELL, STOCK, EXHIBIT OR OFFER FOR SALE, OR DISTRIBUTE) HOMOEOPATHIC MEDICINES', 'remark' => 'Remark', 'office_id' => 6, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_WHOLESALE', 'title' => 'Application For Grant Or Renewal Of A [License To Sell, Stock, Exhibit Or Offer For Sale, Or Distribute] Drugs Other Than Those Specified In Schedule X', 'remark' => 'Remark', 'office_id' => 6, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_FORM19AA', 'title' => 'APPLICATION FOR GRANT OR RENEWAL OF [LICENCE TO SELL, STOCK OR EXHIBIT OR OFFER FOR SALE BY WHOLESALE OR DISTRIBUTE] DRUGS FROM A MOTOR VEHICLE', 'remark' => 'Remark', 'office_id' => 6, 'operational_type' => 'Post processing'],
        ['code' => 'FOOD_DRUG_FORM19B', 'title' => 'APPLICATION FOR GRANT OR RENEWAL OF A (LICENCE TO SELL, STOCK, EXHIBIT OR OFFER FOR SALE, OR DISTRIBUTE) HOMOEOPATHIC MEDICINES', 'remark' => 'Remark', 'office_id' => 6, 'operational_type' => 'Post processing'],

        ['code' => 'ENV_FOREST_FELL_TREES', 'title' => 'APPLICATION FOR PERMISSION TO FELL TREES/TREE PLANTATION IN NON-FOREST AREA', 'remark' => 'Remark', 'office_id' => 3, 'operational_type' => 'Post processing'],
        ['code' => 'ENV_FOREST_BAMBOO', 'title' => 'REGISTRATION OF PRIVATE BAMBOO PLANTATION IN NON-FOREST', 'remark' => 'Remark', 'office_id' => 3, 'operational_type' => 'Post processing'],


        ['code' => 'LABOUR_EMPLOYMENT_CONTRACT', 'title' => 'REGISTRATION OF ESTABLISHMENT EMPLOYING CONTRACT LABOUR', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_CONTRACT_LICENCE', 'title' => 'APPLICATION FOR CONTRACT LABOUR LICENCE', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_MIGRANT_WORKMEN', 'title' => 'APPLICATION FOR REGISTRATION OF ESTABLISHMENT EMPLOYING MIGRANT WORKMEN', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_CONSTRUCT_PERMISSION', 'title' => 'APPLICATION FOR PERMISSION TO CONSTRUCT, EXTEND OR TAKE INTO USE ANY BUILDING AS A FACTORY', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_CONTRACT_RENEWAL', 'title' => ' APPLICATION FOR RENEWAL OF CONTRACT LABOUR LICENCE', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_EMPLOY_WORKERS', 'title' => 'APPLICATION FOR REGISTRATION OF ESTABLISHMENT EMPLOYING BUILDING WORKERS', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_LICENCE_REGISTRATION', 'title' => 'APPLICATION FOR REGISTRATION AND GRANT OR RENEWAL OF LICENSE FOR THE YEAR AND NOTICE OF OCCUPATION SPECIFIED IN SECTIONS 6 & 7 OF THE ACT', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],
        ['code' => 'LABOUR_CERTIFICATE_REGISTRATION', 'title' => 'APPLICATION FOR CERTIFICATE REGISTRATION OF ESTABLISHMENTS', 'remark' => 'Remark', 'office_id' => 7, 'operational_type' => 'Post processing'],

        ['code' => 'GEOLOGY_MINING', 'title' => 'APPLICATION FOR MINING LEASE(Geology)', 'remark' => 'Remark', 'office_id' => 17, 'operational_type' => 'Post processing'],

        // +$var,

    ];
    public function run()
    {
        // include 'HmangaihaArray.php';
        // $data = [$var,...self::DATA];
        // dd( [...HmangaihaSeed::DATA]);
        ApplicationProfile::query()->upsert(self::DATA, 'code');
    }
}
