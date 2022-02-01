<?php
namespace App\Utils;

use Composer\Exception\NoSslException;
use Illuminate\Support\Str;

class AttachmentUtils{
    const SIGNATURE_PHE_WATER_CONNECTION=[
        'size'=>2048,
        'mime'=>'images/*',
        'application_code'=>'PHE_WATER_CONNECTION',
        'key'=>'signature_phe_water_connection',
        'label'=>'Signature of applicant',
        'disk'=>'public',
        'folder'=>'phe/water/attachments'
    ];

// LEGAL Metrology
const SIGN_LEGAL_LICENCE_MANUFACTURING=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'PHE_WATER_CONNECTION',
    'key'=>'legal_licence_manuf_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/1/attachments'
];
const SIGN_LEGAL_LICENCE_RENEWAL_MANUFACTURER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_LICENCE_RENEWAL_MANUFACTURER',
    'key'=>'legal_licence_renewal_manuf_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/2/attachments'
];
const SIGN_LEGAL_DEALER_RENEWAL=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_DEALER_RENEWAL',
    'key'=>'legal_dealer_renewal_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/3/attachments'
];
const SIGN_LEGAL_LICENCE_REPAIR=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_LICENCE_REPAIR',
    'key'=>'legal_licence_repair_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/4/attachments'
];
const SIGN_LEGAL_LICENCE_DEALER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_LICENCE_DEALER',
    'key'=>'legal_licence_dealer_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/5/attachments'
];
const SIGN_LEGAL_REGISTRATION_MANUFACTURER_PACKER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_REGISTRATION_MANUFACTURER_PACKER',
    'key'=>'legal_registration_manufacturer_packer_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/6/attachments'
];
const SIGN_LEGAL_REGISTRATION_IMPORTER_PACKER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_REGISTRATION_IMPORTER_PACKER',
    'key'=>'legal_registration_importer_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/7/attachments'
];
const SIGN_LEGAL_LICENCE_RENEWAL_REPAIRER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_LICENCE_RENEWAL_REPAIRER',
    'key'=>'legal_license_renewal_repairer_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/8/attachments'
];
const SIGN_LEGAL_LICENCE_REGISTRATION_IMPORTER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_LICENCE_REGISTRATION_IMPORTER',
    'key'=>'legal_licence_registration_importer_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/9/attachments'
];
const SIGN_LEGAL_VERIFICATION=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_VERIFICATION',
    'key'=>'legal_verification_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/10/attachments'
];
const SIGN_LEGAL_REVERIFICATION=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LEGAL_REVERIFICATION',
    'key'=>'legal_reverification_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'legal/11/attachments'
];

// POLLUTION HMANGAIHA
const SIGN_POLLUTION_RETURN_SALE_BATTERY=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_RETURN_SALE_BATTERY',
    'key'=>'pollution_return_sale_battery_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/20/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_GENERATION_OR_STORAGE=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_GENERATION_OR_STORAGE',
    'key'=>'pollution_authorization_generation_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/21/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'population_authorization_facilities_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/attachments'
];
// 22 files
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_7=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_seven_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/7/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_14=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_fourteen_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/14/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_15=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_fifteen_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/15/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_17=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_seventeen_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/17/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_19=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_nineteen_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/19/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_FACILITIES_20=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_FACILITIES',
    'key'=>'pollution_authorization_facilities_twenty_file',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/22/20/attachments'
];


const SIGN_POLLUTION_AUTHORIZATION_BIO_WASTE=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_BIO_WASTE',
    'key'=>'pollution_authorization_bio_waste_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/23/attachments'
];
const SIGN_POLLUTION_AUTHORIZATION_EWASTE=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'POLLUTION_AUTHORIZATION_EWASTE',
    'key'=>'pollution_authorization_ewaste_signature_designation',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'pollution/24/attachments'
];

// LAND REVENUE
// const SIGN_POLLUTION_AUTHORIZATION_EWASTE=[
//     'size'=>2048,
//     'mime'=>'images/*',
//     'application_code'=>'POLLUTION_AUTHORIZATION_EWASTE',
//     'key'=>'pollution_authorization_ewaste_signature_designation',
//     'label'=>'Signature of applicant',
//     'disk'=>'public',
//     'folder'=>'pollution/24/attachments'
// ];
const SIGN_LAND_REVENUE_LAND_HOUSE=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LAND_REVENUE_LAND_HOUSE',
    'key'=>'land_revenue_land_house_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'land/2/attachments'
];
const SIGN_LAND_REVENUE_LAND_SHOP=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LAND_REVENUE_LAND_SHOP',
    'key'=>'land_revenue_land_shop_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'land/3/attachments'
];
const SIGN_LAND_REVENUE_LAND_SETTLEMENT=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LAND_REVENUE_LAND_SETTLEMENT',
    'key'=>'land_revenue_land_settlement_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'land/4/attachments'
];
const SIGN_LAND_REVENUE_LAND_DIVERSION=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LAND_REVENUE_LAND_DIVERSION',
    'key'=>'land_revenue_land_diversion_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'land/5/attachments'
];
const SIGN_LAND_REVENUE_LAND_TRANSFER=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'LAND_REVENUE_LAND_TRANSFER',
    'key'=>'land_revenue_land_transfer_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'land/6/attachments'
];
// const SIGN_POLLUTION_AUTHORIZATION_EWASTE=[
//     'size'=>2048,
//     'mime'=>'images/*',
//     'application_code'=>'POLLUTION_AUTHORIZATION_EWASTE',
//     'key'=>'pollution_authorization_ewaste_signature_designation',
//     'label'=>'Signature of applicant',
//     'disk'=>'public',
//     'folder'=>'land/7/attachments'
// ];


// ENVIRONMENT

const SIGN_ENV_FOREST_FELL_TREES_LAND_COPY=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'ENV_FOREST_FELL_TREES',
    'key'=>'env_forest_fell_trees_land_copy_cert',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'environment/2/1/attachments'
];
const SIGN_ENV_FOREST_FELL_TREES_PLANTATION_CERT=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'ENV_FOREST_FELL_TREES',
    'key'=>'env_forest_fell_trees_plantation_cert',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'environment/2/2/attachments'
];

// FIRE
const SIGN_FIRE_NOC=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'FIRE_NOC',
    'key'=>'fire_twentyseven',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'fire/2/attachments'
];


// COMMERCE AND INSUSTRIES
// 1
const CE_ALLOTMENT_PLOT_APPLICANT_SIGNATURE=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_ALLOTMENT_PLOT',
    'key'=>'applicant_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/1/1/attachments'
];
const CE_ALLOTMENT_PLOT_REG_CERTIFICATE = [
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_ALLOTMENT_PLOT',
    'key'=>'reg_certificate',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/1/2/attachments'
];
const CE_ALLOTMENT_PLOT_VOTERS_ID=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_ALLOTMENT_PLOT',
    'key'=>'voters_id',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/1/3/attachments'
];

// 2
const CE_INTEREST_SUBSIDY=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_INTEREST_SUBSIDY',
    'key'=>'cne_interest_subsidy_applicant_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/2/attachments'
];
const CE_POWER_GENERATING=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_POWER_GENERATING',
    'key'=>'commerce_power_generating_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/6/attachments'
];

const CE_COST_PROJECT=[
    'size'=>2048,
    'mime'=>'images/*',
    'application_code'=>'C&E_COST_PROJECT',
    'key'=>'commerce_cost_project_signature',
    'label'=>'Signature of applicant',
    'disk'=>'public',
    'folder'=>'ce/8/attachments'
];





    const ATTACHMENTS = [
        'signature_phe_water_connection'=>self::SIGNATURE_PHE_WATER_CONNECTION,
        // LEGAL METROLOGY
        'legal_licence_manuf_signature_designation'=>self::SIGN_LEGAL_LICENCE_MANUFACTURING,
        'legal_licence_renewal_manuf_signature_designation'=>self::SIGN_LEGAL_LICENCE_RENEWAL_MANUFACTURER,
        'legal_dealer_renewal_signature_designation'=>self::SIGN_LEGAL_DEALER_RENEWAL,
        'legal_licence_repair_signature_designation'=>self::SIGN_LEGAL_LICENCE_REPAIR,
        'legal_licence_manuf_signature_designation'=>self::SIGN_LEGAL_LICENCE_DEALER,
        'legal_registration_manufacturer_packer_signature_designation'=>self::SIGN_LEGAL_REGISTRATION_MANUFACTURER_PACKER,
        'legal_registration_importer_signature_designation'=>self::SIGN_LEGAL_REGISTRATION_IMPORTER_PACKER,
        'legal_license_renewal_repairer_signature_designation'=>self::SIGN_LEGAL_LICENCE_RENEWAL_REPAIRER,
        'legal_licence_registration_importer_signature_designation'=>self::SIGN_LEGAL_LICENCE_REGISTRATION_IMPORTER,
        'legal_verification_signature_designation'=>self::SIGN_LEGAL_VERIFICATION,
        'legal_reverification_signature_designation'=>self::SIGN_LEGAL_REVERIFICATION,

        // POLLUTION
        'pollution_return_sale_battery_signature_designation'=>self::SIGN_POLLUTION_RETURN_SALE_BATTERY,
        'pollution_authorization_generation_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_GENERATION_OR_STORAGE,
        'population_authorization_facilities_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES,

        // 22 files
        'pollution_authorization_facilities_seven_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_7,
        'pollution_authorization_facilities_fourteen_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_14,
        'pollution_authorization_facilities_fifteen_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_15,
        'pollution_authorization_facilities_seventeen_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_17,
        'pollution_authorization_facilities_nineteen_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_19,
        'pollution_authorization_facilities_twenty_file'=>self::SIGN_POLLUTION_AUTHORIZATION_FACILITIES_20,

        'pollution_authorization_bio_waste_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_BIO_WASTE,
        'pollution_authorization_ewaste_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_EWASTE,
        // 'population_authorization_facilities_signature_designation'=>self::SIGN_POLLUTION_APPROVAL_NOTIFICATION,

        // LAND REVENUE
        // 'pollution_authorization_ewaste_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_EWASTE,
        'land_revenue_land_house_signature'=>self::SIGN_LAND_REVENUE_LAND_HOUSE,
        'land_revenue_land_shop_signature'=>self::SIGN_LAND_REVENUE_LAND_SHOP,
        'land_revenue_land_settlement_signature'=>self::SIGN_LAND_REVENUE_LAND_SETTLEMENT,
        'land_revenue_land_diversion_signature'=>self::SIGN_LAND_REVENUE_LAND_DIVERSION,
        'land_revenue_land_transfer_signature'=>self::SIGN_LAND_REVENUE_LAND_TRANSFER,
        // 'pollution_authorization_ewaste_signature_designation'=>self::SIGN_POLLUTION_AUTHORIZATION_EWASTE,

        // ENVIRONMENT
        'env_forest_fell_trees_land_copy_cert'=>self::SIGN_ENV_FOREST_FELL_TREES_LAND_COPY,
        'env_forest_fell_trees_plantation_cert'=>self::SIGN_ENV_FOREST_FELL_TREES_PLANTATION_CERT,
  

        // FIRE
        'fire_twentyseven'=>self::SIGN_FIRE_NOC,
        //COMMERCE AND INSUSTRIES 
            // 1
        'applicant_signature'=>self::CE_ALLOTMENT_PLOT_APPLICANT_SIGNATURE,
        'reg_certificate'=>self::CE_ALLOTMENT_PLOT_REG_CERTIFICATE,
        'voters_id'=>self::CE_ALLOTMENT_PLOT_VOTERS_ID,

            // 2
        'cne_interest_subsidy_applicant_signature'=>self::CE_INTEREST_SUBSIDY,
            // 6
        'commerce_power_generating_signature'=>self::CE_POWER_GENERATING,
            //  8
        'commerce_cost_project_signature'=>self::CE_COST_PROJECT,










    ];

    static function getAttachment(string $key)
    {
        return collect(self::ATTACHMENTS)->first(callback: fn($attachment) => $attachment['key'] == $key);
    }

    static function getAttachmentsByApplicationCode(string $application_code): array
    {
        return collect([
            ...self::SIGNATURE_PHE_WATER_CONNECTION,
            ])
            ->filter(fn($attachment) => Str::lower($attachment['application_code']) == Str::lower($application_code))
            ->toArray();
    }

}
