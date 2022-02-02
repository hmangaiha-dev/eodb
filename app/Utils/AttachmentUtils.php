<?php

namespace App\Utils;
use App\Utils\AttachmentUtilsRj;

use Composer\Exception\NoSslException;
use Illuminate\Support\Str;

class AttachmentUtils extends AttachmentUtilsRj
{
    
    
   
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
        'signature_phe_water_connection'=>self::PHE_WATER_CONNECTION_SIGNATURE,
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
        'labour_cert_reg_signature' => self::LABOUR_CERTIFICATE_REGISTRATION_SIGNATURE,
        'labour_lic_reg_eleven_signature' => self::LABOUR_LICENCE_REGISTRATION_SIGNATURE,
        'labour_emp_contract_eight' => self::LABOUR_EMPLOYMENT_CONTRACT_RECEIPT,
        'labour_emp_contract_signature' => self::LABOUR_EMPLOYMENT_CONTRACT_SIGNATURE,
        'labour_contract_lic_signature' => self::LABOUR_CONTRACT_LICENCE_SIGNATURE,
        'labour_migant_work_eight' => self::LABOUR_MIGRANT_WORKMEN_CHALLAN,
        'labour_construct_perm_signature' => self::LABOUR_CONSTRUCT_PERMISSION_SIGNATURE,
        'labour_construct_perm_flow_chart' => self::LABOUR_CONSTRUCT_PERMISSION_FLOW_CHART,
        'labour_construct_perm_plans' => self::LABOUR_CONSTRUCT_PERMISSION_SITE_PLAN,
        'labour_construct_perm_other' => self::LABOUR_CONSTRUCT_PERMISSION_OTHER_PARTICULARS,
        'labour_contract_renew_signature' => self::LABOUR_CONTRACT_RENEWAL_SIGNATURE,
        'labour_contract_renew_six' => self::LABOUR_CONTRACT_RENEWAL_RECEIPT,
        'labour_employ_work_nine' => self::LABOUR_EMPLOY_WORKERS_DEMAND_DRAFT,
        'signature_phe_water_connection' => self::PHE_WATER_CONNECTION_SIGNATURE,
        'phe_water_transfer_signature' => self::PHE_WATER_TRANSFER_SIGNATURE,
        'phe_change_name_signature' => self::PHE_CHANGE_NAME_SIGNATURE,
        'phe_change_name_seven' => self::PHE_CHANGE_NAME_RECEIPT,
        'phe_change_name_six' => self::PHE_CHANGE_NAME_LAND_PASS,
        'phe_reconn_signature' => self::PHE_RECONNECTION_SIGNATURE,
        'phe_disconnect_seven' => self::PHE_DISCONNECTION_RECEIPT,
        'phe_disconnect_signature' => self::PHE_DISCONNECTION_SIGNATURE,

        'power_new_connection_photo' => self::POWER_NEW_CONNECTION_PHOTOGRAPH,
        'power_new_connection_identity_proof' => self::POWER_NEW_CONNECTION_IDENTITY,
        'power_new_conn2_fifteen_a' => self::POWER_NEW_CONNECTION2_POSSESSION_LETTER,
        'power_new_conn2_fifteen_b' => self::POWER_NEW_CONNECTION2_ISSUED_INSTITUTION,
        'power_new_conn2_signature' => self::POWER_NEW_CONNECTION2_SIGNATURE,
        'power_new_conn2_doc_one' => self::POWER_NEW_CONNECTION2_OWNERSHIP_PROOF,
        'power_new_conn2_doc_two' => self::POWER_NEW_CONNECTION2_MAP,
        'power_new_conn2_doc_three' => self::POWER_NEW_CONNECTION2_LICENCE_NOC,
        'power_new_conn2_doc_four' => self::POWER_NEW_CONNECTION2_AFFIDAVIT,
        'power_new_conn2_doc_five' => self::POWER_NEW_CONNECTION2_DEED,
        'power_new_conn2_doc_six' => self::POWER_NEW_CONNECTION2_MEMORANDUM,
        'power_new_conn2_doc_seven' => self::POWER_NEW_CONNECTION2_RESIDENTIAL,
        'power_new_conn2_doc_eight' => self::POWER_NEW_CONNECTION2_INTENT_LETTER,
        'power_new_conn2_doc_nine' => self::POWER_NEW_CONNECTION2_EQUIPMENT,
        'power_new_conn2_doc_ten' => self::POWER_NEW_CONNECTION2_RESOLUTION,
        'power_new_conn2_doc_eleven' => self::POWER_NEW_CONNECTION2_INDUSTRIES_DEPT,
        'power_new_conn2_doc_twelve' => self::POWER_NEW_CONNECTION2_PROJECT_REPORT,
        'power_new_conn2_doc_thirteen' => self::POWER_NEW_CONNECTION2_RELEVANT_SECTION,

        'power_change_name_latest_bill' => self::POWER_CHANGE_NAME_LATEST_BILL,
        'power_change_name_owner_proof' => self::POWER_CHANGE_NAME_OWNERSHIP_PROOF,
        'power_change_name_noc_' => self::POWER_CHANGE_NAME_NOC,
        'power_change_name_succession' => self::POWER_CHANGE_NAME_SUCCESSION,
        'power_change_name_signature' => self::POWER_CHANGE_NAME_SIGNATURE,

        'power_conversion_service_inspection_report' => self::POWER_CONVERSION_INSPECTION_REPORT,
        'power_conversion_service_other_doc' => self::POWER_CONVERSION_INSPECTION_ANY_OTHER,
        'power_conversion_service_signature' => self::POWER_CONVERSION_SIGNATURE,

        'power_load_enc_rdc_completion_cert' => self::POWER_LOAD_ENC_RDC_COMPLETE_CERT,
        'power_load_enc_rdc_signature' => self::POWER_LOAD_ENC_RDC_SIGNATURE,
        'power_load_enc_rdc_authorised_sign' => self::POWER_LOAD_ENC_RDC_RESOLUTION_SIGNATORY,

        'power_meter_complaints_signature' => self::POWER_METER_COMPLAINTS_SIGNATURE,

        'power_disconnection_last_bill' => self::POWER_DISCONNECTION_LAST_BILL,
        'power_disconnection_last_payment_receipt' => self::POWER_DISCONNECTION_PAYMENT_RECEIPT,
        'power_disconnection_last_signature' => self::POWER_DISCONNECTION_PAYMENT_SIGNATURE,

        //FOOD DRUG
        'food_drug_general_doc_one' => self::FOOD_DRUG_GENERAL_RETAIL_FEE_PEKNA,
        'food_drug_general_five_i' => self::FOOD_DRUG_GENERAL_RETAIL_SIGNATURE,
        'food_drug_general_doc_two' => self::FOOD_DRUG_GENERAL_RETAIL_QUALIFICATION_CERT,
        'food_drug_general_doc_three' => self::FOOD_DRUG_GENERAL_RETAIL_VC_LEHKHA,
        'food_drug_general_doc_four' => self::FOOD_DRUG_GENERAL_RETAIL_AGREEMENT,
        'food_drug_general_doc_five' => self::FOOD_DRUG_GENERAL_RETAIL_PLAN_LAYOUT,
        'food_drug_general_doc_six' => self::FOOD_DRUG_GENERAL_RETAIL_REMTIHNA_LEHKHA,
        'food_drug_general_doc_seven' => self::FOOD_DRUG_GENERAL_RETAIL_PASSPORT,
        'food_drug_general_doc_eight' => self::FOOD_DRUG_GENERAL_RETAIL_VOTERID,




        'food_drug_restricted_doc_one' => self::FOOD_DRUG_RESTRICTED_FEE_PEKNA,
        'food_drug_restricted_doc_nine' => self::FOOD_DRUG_RESTRICTED_SIGNATURE,
        'food_drug_restricted_doc_two' => self::FOOD_DRUG_RESTRICTED_QUALIFICATION_CERT,
        'food_drug_restricted_doc_three' => self::FOOD_DRUG_RESTRICTED_VC_LEHKHA,
        'food_drug_restricted_doc_four' => self::FOOD_DRUG_RESTRICTED_AGREEMENT,
        'food_drug_restricted_doc_five' => self::FOOD_DRUG_RESTRICTED_PLAN_LAYOUT,
        'food_drug_restricted_doc_six' => self::FOOD_DRUG_RESTRICTED_REMTIHNA_LEHKHA,
        'food_drug_restricted_doc_seven' => self::FOOD_DRUG_RESTRICTED_PASSPORT,
        'food_drug_restricted_doc_eight' => self::FOOD_DRUG_RESTRICTED_VOTERID,

        'food_drug_form19AA_addl_statement_i' => self::FOOD_DRUG_FORM19AA_SIGNATURE,

        'food_drug_19B_five_i' => self::FOOD_DRUG_FORM19B_SIGNATURE,

        'pollution_consent_general_ev_3_1_2_a' => self::POLLUTION_CONSENT_INDUSTRIES_MAP,
        'pollution_consent_signature' => self::POLLUTION_CONSENT_INDUSTRIES_SIGNATURE,

        'pollution_accident_medical_signature' => self::POLLUTION_ACCIDENT_MEDICAL_SIGNATURE,

        'pollution_form_5_signature' => self::POLLUTION_FORM_5_SIGNATURE,

        'pollution_accident_hazardous_signature' => self::POLLUTION_ACCIDENT_HAZARDOUS_SIGNATURE,

        'pollution_accident_solid_signature' => self::POLLUTION_ACCIDENT_SOLIDWASTE_SIGNATURE,

        'pollution_authorise_solidwaste_five_a' => self::POLLUTION_AUTHORISE_SOLID_WASTE_SITE_CLEARANCE,
        'pollution_authorise_solidwaste_five_b' => self::POLLUTION_AUTHORISE_SOLID_WASTE_ENV_CLEARANCE,
        'pollution_authorise_solidwaste_five_c' => self::POLLUTION_AUTHORISE_SOLID_WASTE_CONSENT,
        'pollution_authorise_solidwaste_five_d' => self::POLLUTION_AUTHORISE_SOLID_WASTE_AGREEMENT,
        'pollution_authorise_solidwaste_five_e' => self::POLLUTION_AUTHORISE_SOLID_WASTE_INVESTMENT,
        'pollution_authorise_solidwaste_signature' => self::POLLUTION_AUTHORISE_SOLID_WASTE_SIGNATURE,

        'pollution_producer_two' => self::POLLUTION_PRODUCER_BRAND_DISTRICT_INDUSTRIES,
        'pollution_producer_five' => self::POLLUTION_PRODUCER_BRAND_FLOW_DIAGRAM,
        'pollution_producer_seven' => self::POLLUTION_PRODUCER_BRAND_VALID_CONSENT_WATER,
        'pollution_producer_eight' => self::POLLUTION_PRODUCER_BRAND_VALID_CONSENT_AIR,

        'pollution_brand_three' => self::POLLUTION_PRODUCER_BRAND_DISTRICT_INDUSTRIES2,
        'pollution_brand_six' => self::POLLUTION_PRODUCER_BRAND_VALID_CONSENT_WATER2,
        'pollution_brand_seven' => self::POLLUTION_PRODUCER_BRAND_VALID_CONSENT_AIR2,
        'pollution_brand_nine' => self::POLLUTION_PRODUCER_BRAND_PERSON_LIST,
        'pollution_producer_brand_signature' => self::POLLUTION_PRODUCER_BRAND_SIGNATURE,

        'pollution_form11_six' => self::POLLUTION_FORM_11_MANUFACTURE_PROCESS,
        'pollution_form11_eight_b' => self::POLLUTION_FORM_11_WASTE_COLLECTION,
        'pollution_form11_eight_d' => self::POLLUTION_FORM_11_WASTE_SPCB,
        'pollution_form11_eight_e' => self::POLLUTION_FORM_11_WASTE_ANALYSIS_REPORT,
        'pollution_form11_brand_signature' => self::POLLUTION_FORM_11_WASTE_SIGNATURE,

        'pollution_form12_two' => self::POLLUTION_FORM_12_DIC_DCSSI,
        'pollution_form12_signature' => self::POLLUTION_FORM_12_SIGNATURE,
        'pollution_form13_nine' => self::POLLUTION_FORM_13_COMPLIANCE_STATUS,
        'pollution_form13_signature' => self::POLLUTION_FORM_13_SIGNATURE,

        'pollution_form14_eleven' => self::POLLUTION_FORM_14_INFRASTRUCTURE1,
        'pollution_form14_twelve' => self::POLLUTION_FORM_14_INFRASTRUCTURE2,
        'pollution_form14_twenty_two' => self::POLLUTION_FORM_14_ACTION_PLAN,

        'pollution_form15_signature' => self::POLLUTION_FORM_15_SIGNATURE,
        'pollution_form16_signature' => self::POLLUTION_FORM_16_SIGNATURE,

        'pollution_form17_partA_four' => self::POLLUTION_FORM_17_ERP,
        'pollution_form17_partB_one_b' => self::POLLUTION_FORM_17_PROCESS_FLOW,
        'pollution_form17_partC_three' => self::POLLUTION_FORM_17_ENV_CLEARANCE,
        'pollution_form17_signature' => self::POLLUTION_FORM_17_SIGNATURE,

        'pollution_form18_enclose' => self::POLLUTION_FORM_18_LIST,

        'pollution_form19_five_attach' => self::POLLUTION_FORM_19_ATTACH_MAP,
        'pollution_form19_seven_ii' => self::POLLUTION_FORM_19_CONTINGENCY_PLAN,
        'pollution_form19_signature' => self::POLLUTION_FORM_19_SIGNATURE,


        



    ];

    static function getAttachment(string $key)
    {
        return collect(self::ATTACHMENTS)->first(callback: fn ($attachment) => $attachment['key'] == $key);
    }

    static function getAttachmentsByApplicationCode(string $application_code): array
    {
        return collect([...self::PHE_CHANGE_NAME_SIGNATURE])
            ->filter(fn ($attachment) => Str::lower($attachment['application_code']) == Str::lower($application_code))
            ->toArray();
    }
}
