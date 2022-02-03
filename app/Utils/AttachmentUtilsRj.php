<?php

namespace App\Utils;

class AttachmentUtilsRj
{
    const POLLUTION_CONSENT_INDUSTRIES_MAP = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_CONSENT_INDUSTRIES',
        'key' => 'pollution_consent_general_ev_3_1_2_a',
        'label' => '3.1.2 a) Attached Map Showing Topographical Features Of The Area',
        'disk' => 'public',
        'folder' => 'pollution/1/attachments'
    ];
    const POLLUTION_CONSENT_INDUSTRIES_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_CONSENT_INDUSTRIES',
        'key' => 'pollution_consent_signature',
        'label' => 'Signature Of The Operator',
        'disk' => 'public',
        'folder' => 'pollution/1/attachments'
    ];
    const POLLUTION_FORM_5_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_5',
        'key' => 'pollution_form_5_signature',
        'label' => 'Signature Of The Head Of The Institution',
        'disk' => 'public',
        'folder' => 'pollution/5/attachments'
    ];





    const PHE_WATER_CONNECTION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_WATER_CONNECTION',
        'key' => 'signature_phe_water_connection',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'phe/1/attachments'
    ];

    const PHE_WATER_TRANSFER_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_WATER_TRANSFER',
        'key' => 'phe_water_transfer_signature',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'phe/3/attachments'
    ];
    const PHE_CHANGE_NAME_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_CHANGE_NAME',
        'key' => 'phe_change_name_signature',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'phe/4/attachments'
    ];
    const PHE_CHANGE_NAME_RECEIPT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_CHANGE_NAME',
        'key' => 'phe_change_name_seven',
        'label' => '7. Bill pekna hnuhnung ber receipt',
        'disk' => 'public',
        'folder' => 'phe/4/attachments'
    ];
    const PHE_CHANGE_NAME_LAND_PASS =   [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_CHANGE_NAME',
        'key' => 'phe_change_name_six',
        'label' => '6. LSC/Land Pass/Relevant Document attested photocopy',
        'disk' => 'public',
        'folder' => 'phe/4/attachments'
    ];
    const PHE_RECONNECTION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_RECONNECTION',
        'key' => 'phe_reconn_signature',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'phe/5/attachments'
    ];


    const PHE_DISCONNECTION_RECEIPT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_DISCONNECTION',
        'key' => 'phe_disconnect_seven',
        'label' => '7. Bill pekna hnuhnungber receipt',
        'disk' => 'public',
        'folder' => 'phe/6/attachments'
    ];

    const PHE_DISCONNECTION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'PHE_DISCONNECTION',
        'key' => 'phe_disconnect_signature',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'phe/6/attachments'
    ];



    const LABOUR_CERTIFICATE_REGISTRATION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CERTIFICATE_REGISTRATION',
        'key' => 'labour_cert_reg_signature',
        'label' => 'Signature of applicant',
        'disk' => 'public',
        'folder' => 'labour/1/attachments'
    ];
    const LABOUR_LICENCE_REGISTRATION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CERTIFICATE_REGISTRATION',
        'key' => 'labour_lic_reg_eleven_signature',
        'label' => 'Signature of the occupter',
        'disk' => 'public',
        'folder' => 'labour/2/attachments'
    ];
    const LABOUR_EMPLOYMENT_CONTRACT_RECEIPT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_EMPLOYMENT_CONTRACT',
        'key' => 'labour_emp_contract_eight',
        'label' => '8. Particulars of Treasury Receipt enclosed (Name of the Treasury, Amount and date) ',
        'disk' => 'public',
        'folder' => 'labour/3/attachments'
    ];
    const LABOUR_EMPLOYMENT_CONTRACT_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_EMPLOYMENT_CONTRACT',
        'key' => 'labour_emp_contract_signature',
        'label' => 'Signature ',
        'disk' => 'public',
        'folder' => 'labour/3/attachments'
    ];
    const LABOUR_CONTRACT_LICENCE_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_EMPLOYMENT_CONTRACT',
        'key' => 'labour_contract_lic_signature',
        'label' => 'Signature of the applicant',
        'disk' => 'public',
        'folder' => 'labour/4/attachments'
    ];
    const LABOUR_MIGRANT_WORKMEN_CHALLAN = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_MIGRANT_WORKMEN',
        'key' => 'labour_migant_work_eight',
        'label' => '8. Original copy of the Treasury challan depositing the requisite fees enclosed',
        'disk' => 'public',
        'folder' => 'labour/5/attachments'
    ];
    const LABOUR_CONSTRUCT_PERMISSION_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONSTRUCT_PERMISSION',
        'key' => 'labour_construct_perm_signature',
        'label' => 'Signature of the applicant',
        'disk' => 'public',
        'folder' => 'labour/6/attachments'
    ];
    const LABOUR_CONSTRUCT_PERMISSION_FLOW_CHART = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONSTRUCT_PERMISSION',
        'key' => 'labour_construct_perm_flow_chart',
        'label' => '1. A flow chart of the manufacturing process supplemented by a brief description of the process in its various stages',
        'disk' => 'public',
        'folder' => 'labour/6/attachments'
    ];
    const LABOUR_CONSTRUCT_PERMISSION_SITE_PLAN = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONSTRUCT_PERMISSION',
        'key' => 'labour_construct_perm_plans',
        'label' => " <label class='zlabel' for='gender'>
        2. Plans in duplicate drawn to scale showing: <br />
        a) The site of the factory and immediate surroundings including adjacent
        buildings and other structures, roads, drains, etc. and <br />
        b) The plan elevation and necessary cross-sections of various buildings,
        indicating all relevant details relating to natural lighting,
        ventilation and means of escape in case of fire. The plans shall also
        clearly indicate the position of the plant and machinery aisles and
        passage ways</label
      >",
        'disk' => 'public',
        'folder' => 'labour/6/attachments'
    ];

    const LABOUR_CONSTRUCT_PERMISSION_OTHER_PARTICULARS = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONSTRUCT_PERMISSION',
        'key' => 'labour_construct_perm_other',
        'label' => '3. Such other particulars as the Chief Inspector may require',
        'disk' => 'public',
        'folder' => 'labour/6/attachments'
    ];

    const LABOUR_CONTRACT_RENEWAL_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONTRACT_RENEWAL',
        'key' => 'labour_contract_renew_signature',
        'label' => 'Signature of the applicant',
        'disk' => 'public',
        'folder' => 'labour/7/attachments'
    ];
    const LABOUR_CONTRACT_RENEWAL_RECEIPT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_CONTRACT_RENEWAL',
        'key' => 'labour_contract_renew_six',
        'label' => '6. No. and date of the treasury receipt enclosed',
        'disk' => 'public',
        'folder' => 'labour/7/attachments'
    ];
    const LABOUR_EMPLOY_WORKERS_DEMAND_DRAFT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'LABOUR_EMPLOY_WORKERS',
        'key' => 'labour_employ_work_nine',
        'label' => '9. Particulars of demand draft, enclosed (name of the Bank amount, demand draft No. and date):',
        'disk' => 'public',
        'folder' => 'labour/8/attachments'
    ];

    //POWER AND ELECTRICITY
    const POWER_NEW_CONNECTION_PHOTOGRAPH = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION',
        'key' => 'power_new_connection_photo',
        'label' => '11.a)Photograph to be affixed on application form',
        'disk' => 'public',
        'folder' => 'power/1/attachments'
    ];
    const POWER_NEW_CONNECTION_IDENTITY = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION',
        'key' => 'power_new_connection_identity_proof',
        'label' => '11.(b) Identity Proof duly certified submitted along with this application form:',
        'disk' => 'public',
        'folder' => 'power/1/attachments'
    ];
    const POWER_NEW_CONNECTION2_POSSESSION_LETTER = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_fifteen_a',
        'label' => '15 (a) Possession Letter or No-Objection Certificate',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_ISSUED_INSTITUTION = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_fifteen_b',
        'label' => '15 (b) Issued by the Institution (attach a copy)',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_SIGNATURE = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_signature',
        'label' => 'Signature of the consumer/ authorised signatory',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_OWNERSHIP_PROOF = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_one',
        'label' => '1. Proof of ownership of the premises',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_MAP = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_two',
        'label' => '2. A map indicating the proposed location of the plant/office and the point where supply is required. The map should normally be of the scale of 1 cm representing 1200 cm',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_LICENCE_NOC = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_three',
        'label' => '3. Licence/NOC from statutory authority, if required or a declaration by the applicant that his connection does not fall under the requirement of NOC under any statute',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_AFFIDAVIT = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_four',
        'label' => '4. In case of a proprietary firm, an affidavit to be submitted stating that the applicant is the sole proprietor of the firm',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_DEED = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_five',
        'label' => '5. In case of partnership firm, partnership deed',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_MEMORANDUM  = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_six',
        'label' => '6. In case of Limited Company, Memorandum and Articles of Association and Certificate of Incorporation',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_RESIDENTIAL  = [
        'size' => 2048,
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_seven',
        'label' => '7. Proof of permanent residential address of the consumer and PAN Number, if any. If there is any change at a later date, the same shall be intimated by the consumer to the licensee immediately',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_INTENT_LETTER = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_eight',
        'label' => '8. Letter of intent for production/ enhancement in production may be furnished',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_EQUIPMENT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_nine',
        'label' => '9. List of equipments proposed to be installed along with the expected load',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_RESOLUTION = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_ten',
        'label' => '10. Resolution for authorised signatory',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_INDUSTRIES_DEPT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_eleven',
        'label' => '11. Registration from Industries Department',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_PROJECT_REPORT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_twelve',
        'label' => '12. Extract of project report relevant to power and process requirements (in case of industries)',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];
    const POWER_NEW_CONNECTION2_RELEVANT_SECTION = [
        'mime' => 'images/*',
        'application_code' => 'POWER_NEW_CONNECTION2',
        'key' => 'power_new_conn2_doc_thirteen',
        'label' => '13. Copy of the relevant section of the current tariff order that provides details of the tariff category opted by the consumer and duly signed by him. This will be appended with the agreement after completion of formalities',
        'disk' => 'public',
        'folder' => 'power/2/attachments'
    ];

    const POWER_CHANGE_NAME_LATEST_BILL = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CHANGE_NAME',
        'key' => 'power_change_name_latest_bill',
        'label' => '1. Copy of latest bill duly paid',
        'disk' => 'public',
        'folder' => 'power/3/attachments'
    ];
    const POWER_CHANGE_NAME_OWNERSHIP_PROOF = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CHANGE_NAME',
        'key' => 'power_change_name_owner_proof',
        'label' => '2. Proof of ownership / legal occupancy of premises',
        'disk' => 'public',
        'folder' => 'power/3/attachments'
    ];
    const POWER_CHANGE_NAME_NOC = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CHANGE_NAME',
        'key' => 'power_change_name_noc_',
        'label' => '3. No Objection Certificate from the existing consumer if available/possible',
        'disk' => 'public',
        'folder' => 'power/3/attachments'
    ];
    const POWER_CHANGE_NAME_SUCCESSION = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CHANGE_NAME',
        'key' => 'power_change_name_succession',
        'label' => '4. Registered deed/ Succession certificate/_ (if any other document, please specify)',
        'disk' => 'public',
        'folder' => 'power/3/attachments'
    ];
    const POWER_CHANGE_NAME_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CHANGE_NAME',
        'key' => 'power_change_name_signature',
        'label' => 'Signature of the Consumer',
        'disk' => 'public',
        'folder' => 'power/3/attachments'
    ];

    const POWER_CONVERSION_INSPECTION_REPORT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CONVERSION_SERVICE',
        'key' => 'power_conversion_service_inspection_report',
        'label' => '1. Installation inspection report by the Electrical Inspector',
        'disk' => 'public',
        'folder' => 'power/5/attachments'
    ];
    const POWER_CONVERSION_INSPECTION_ANY_OTHER = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CONVERSION_SERVICE',
        'key' => 'power_conversion_service_other_doc',
        'label' => '2. Any other document (please specify)',
        'disk' => 'public',
        'folder' => 'power/5/attachments'
    ];
    const POWER_CONVERSION_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POWER_CONVERSION_SERVICE',
        'key' => 'power_conversion_service_signature',
        'label' => 'Signature of the consumer',
        'disk' => 'public',
        'folder' => 'power/5/attachments'
    ];

    const POWER_LOAD_ENC_RDC_COMPLETE_CERT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_LOAD_ENC_RDC',
        'key' => 'power_load_enc_rdc_completion_cert',
        'label' => "1. A work completion certificate & test report from Licensed Electrical Contractor, if the consumer's installation has been altered",
        'disk' => 'public',
        'folder' => 'power/6/attachments'
    ];
    const POWER_LOAD_ENC_RDC_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POWER_LOAD_ENC_RDC',
        'key' => 'power_load_enc_rdc_signature',
        'label' => "Signature of the consumer",
        'disk' => 'public',
        'folder' => 'power/6/attachments'
    ];
    const POWER_LOAD_ENC_RDC_RESOLUTION_SIGNATORY = [
        'mime' => 'images/*',
        'application_code' => 'POWER_LOAD_ENC_RDC',
        'key' => 'power_load_enc_rdc_authorised_sign',
        'label' => "2. Resolution for authorised signatory",
        'disk' => 'public',
        'folder' => 'power/6/attachments'
    ];

    const POWER_METER_COMPLAINTS_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POWER_METER_COMPLAINTS',
        'key' => 'power_meter_complaints_signature',
        'label' => "Signature of Consumer",
        'disk' => 'public',
        'folder' => 'power/8/attachments'
    ];

    const POWER_DISCONNECTION_LAST_BILL = [
        'mime' => 'images/*',
        'application_code' => 'POWER_DISCONNECTION',
        'key' => 'power_disconnection_last_bill',
        'label' => "1. Copy of last bill",
        'disk' => 'public',
        'folder' => 'power/9/attachments'
    ];
    const POWER_DISCONNECTION_PAYMENT_RECEIPT = [
        'mime' => 'images/*',
        'application_code' => 'POWER_DISCONNECTION',
        'key' => 'power_disconnection_last_payment_receipt',
        'label' => "2. Copy of payment receipt of last bill",
        'disk' => 'public',
        'folder' => 'power/9/attachments'
    ];
    const POWER_DISCONNECTION_PAYMENT_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POWER_DISCONNECTION',
        'key' => 'power_disconnection_last_signature',
        'label' => "Signature of the Consumer",
        'disk' => 'public',
        'folder' => 'power/9/attachments'
    ];


    const FOOD_DRUG_GENERAL_RETAIL_FEE_PEKNA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_one',
        'label' => "1. Fee pekna challan copy 2.",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_five_i',
        'label' => "5.I) Signature",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_QUALIFICATION_CERT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_two',
        'label' => "2. Educational qualification certificate.",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_VC_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_three',
        'label' => "3. Venchhung mi ngei tih hriattirna LC/VC lehkha",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_AGREEMENT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_four',
        'label' => "4. Supervision Agreement letter for Form 19",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_PLAN_LAYOUT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_five',
        'label' => "5. Plan layout of drug store",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_REMTIHNA_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_six',
        'label' => "6. Mi dawr luah tur tan in neitu remtihna lehkha.",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_PASSPORT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_seven',
        'label' => "7. Diltu passport thlalak (6 copies)",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];
    const FOOD_DRUG_GENERAL_RETAIL_VOTERID = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_GENERAL_RETAIL',
        'key' => 'food_drug_general_doc_eight',
        'label' => "8. Voter ID/Aadhar Card",
        'disk' => 'public',
        'folder' => 'food/1_3/attachments'
    ];





    const FOOD_DRUG_RESTRICTED_FEE_PEKNA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_one',
        'label' => "1. Fee pekna challan copy 2.",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_nine',
        'label' => "5.I) Signature",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_QUALIFICATION_CERT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_two',
        'label' => "2. Educational qualification certificate.",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_VC_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_three',
        'label' => "3. Venchhung mi ngei tih hriattirna LC/VC lehkha",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_AGREEMENT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_four',
        'label' => "4. Supervision Agreement letter for Form 19",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_PLAN_LAYOUT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_five',
        'label' => "5. Plan layout of drug store",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_REMTIHNA_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_six',
        'label' => "6. Mi dawr luah tur tan in neitu remtihna lehkha.",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_PASSPORT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_seven',
        'label' => "7. Diltu passport thlalak (6 copies)",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];
    const FOOD_DRUG_RESTRICTED_VOTERID = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_RESTRICTED_RETAIL',
        'key' => 'food_drug_restricted_doc_eight',
        'label' => "8. Voter ID/Aadhar Card",
        'disk' => 'public',
        'folder' => 'food/2/attachments'
    ];

    const FOOD_DRUG_FORM19AA_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_FORM19AA',
        'key' => 'food_drug_form19AA_addl_statement_i',
        'label' => "I) Signature",
        'disk' => 'public',
        'folder' => 'food/4/attachments'
    ];

    const FOOD_DRUG_FORM19B_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_FORM19B',
        'key' => 'food_drug_19B_five_i',
        'label' => "I) Signature",
        'disk' => 'public',
        'folder' => 'food/5/attachments'
    ];











    const FOOD_DRUG_WHOLESALE_FEE_PEKNA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_one',
        'label' => "1. Fee pekna challan copy 2.",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_five_i',
        'label' => "5.I) Signature",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_QUALIFICATION_CERT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_two',
        'label' => "2. Educational qualification certificate.",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_VC_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_three',
        'label' => "3. Venchhung mi ngei tih hriattirna LC/VC lehkha",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_AGREEMENT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_four',
        'label' => "4. Supervision Agreement letter for Form 19",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_PLAN_LAYOUT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_five',
        'label' => "5. Plan layout of drug store",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_REMTIHNA_LEHKHA = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_six',
        'label' => "6. Mi dawr luah tur tan in neitu remtihna lehkha.",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_PASSPORT = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_seven',
        'label' => "7. Diltu passport thlalak (6 copies)",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];
    const FOOD_DRUG_WHOLESALE_VOTERID = [
        'mime' => 'images/*',
        'application_code' => 'FOOD_DRUG_WHOLESALE',
        'key' => 'food_drug_general_doc_eight',
        'label' => "8. Voter ID/Aadhar Card",
        'disk' => 'public',
        'folder' => 'food/3/attachments'
    ];


    const POLLUTION_ACCIDENT_MEDICAL_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_ACCIDENT_MEDICAL',
        'key' => 'pollution_accident_medical_signature',
        'label' => "Signature of The Applicant",
        'disk' => 'public',
        'folder' => 'pollution/2/attachments'
    ];

    const POLLUTION_ACCIDENT_HAZARDOUS_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_ACCIDENT_HAZARDOUS',
        'key' => 'pollution_accident_hazardous_signature',
        'label' => "Signature of The Applicant",
        'disk' => 'public',
        'folder' => 'pollution/4/attachments'
    ];

    const POLLUTION_ACCIDENT_SOLIDWASTE_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_ACCIDENT_SOLIDWASTE',
        'key' => 'pollution_accident_solid_signature',
        'label' => "Signature of The Applicant",
        'disk' => 'public',
        'folder' => 'pollution/6/attachments'
    ];


    const POLLUTION_AUTHORISE_SOLID_WASTE_SITE_CLEARANCE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_five_a',
        'label' => "5 a) Site clearance (local body)",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];
    const POLLUTION_AUTHORISE_SOLID_WASTE_ENV_CLEARANCE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_five_b',
        'label' => "5 b) Proof of Environmental Clearance",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];
    const POLLUTION_AUTHORISE_SOLID_WASTE_CONSENT = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_five_c',
        'label' => "5 c) Consent for establishment",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];
    const POLLUTION_AUTHORISE_SOLID_WASTE_AGREEMENT = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_five_d',
        'label' => "5 d) Agreement between municipal authority and operating agency",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];
    const POLLUTION_AUTHORISE_SOLID_WASTE_INVESTMENT = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_five_e',
        'label' => "5 e) Investment on the project and expected return",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];
    const POLLUTION_AUTHORISE_SOLID_WASTE_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_AUTHORISE_SOLID_WASTE',
        'key' => 'pollution_authorise_solidwaste_signature',
        'label' => "Signature",
        'disk' => 'public',
        'folder' => 'pollution/7/attachments'
    ];



    const POLLUTION_PRODUCER_BRAND_DISTRICT_INDUSTRIES = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_authorise_solidwaste_signature',
        'label' => "2 Is the unit registered with the District Industries Centre of the State Government or Union territory? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_DISTRICT_INDUSTRIES2 = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_brand_three',
        'label' => "2 Is the unit registered with the District Industries Centre of the State Government or Union territory? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_FLOW_DIAGRAM = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_producer_five',
        'label' => "2 Is the unit registered with the District Industries Centre of the State Government or Union territory? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_VALID_CONSENT_WATER = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_producer_seven',
        'label' => "7 Does the unit have a valid consent under the Water (Prevention and control of Pollution) Act, 1974? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_VALID_CONSENT_AIR = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_brand_six',
        'label' => "8 Does the unit have a valid consent under the Air (Prevention and control of Pollution) Act, 1981? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_VALID_CONSENT_WATER2 = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_brand_seven',
        'label' => "7 Does the unit have a valid consent under the Water (Prevention and control of Pollution) Act, 1974? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_VALID_CONSENT_AIR2 = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_producer_eight',
        'label' => "8 Does the unit have a valid consent under the Air (Prevention and control of Pollution) Act, 1981? If yes, attach a copy",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_PERSON_LIST = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_brand_nine',
        'label' => "9 Attach or Provide list of person supplying plastic material",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];
    const POLLUTION_PRODUCER_BRAND_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_PRODUCER_BRAND',
        'key' => 'pollution_producer_brand_signature',
        'label' => "Signature",
        'disk' => 'public',
        'folder' => 'pollution/10/attachments'
    ];

    const POLLUTION_FORM_11_MANUFACTURE_PROCESS = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_11',
        'key' => 'pollution_form11_six',
        'label' => "6 Manufacturing Process Please attach a flow diagram of the manufacturing process flow diagram for each product",
        'disk' => 'public',
        'folder' => 'pollution/11/attachments'
    ];

    const POLLUTION_FORM_11_WASTE_COLLECTION = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_11',
        'key' => 'pollution_form11_eight_b',
        'label' => "8.b) Waste Collection and transportation (attac details) ",
        'disk' => 'public',
        'folder' => 'pollution/11/attachments'
    ];
    const POLLUTION_FORM_11_WASTE_SPCB = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_11',
        'key' => 'pollution_form11_eight_d',
        'label' => "d. Provide details of the disposal facility, whether the facility is authorized by SPCB or PCC",
        'disk' => 'public',
        'folder' => 'pollution/11/attachments'
    ];
    const POLLUTION_FORM_11_WASTE_ANALYSIS_REPORT = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_11',
        'key' => 'pollution_form11_eight_e',
        'label' => "e. Please attach analysis report of characterization of waste generated (including leachate test if applicable) ",
        'disk' => 'public',
        'folder' => 'pollution/11/attachments'
    ];
    const POLLUTION_FORM_11_WASTE_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_11',
        'key' => 'pollution_form11_brand_signature',
        'label' => "Signature",
        'disk' => 'public',
        'folder' => 'pollution/11/attachments'
    ];

    const POLLUTION_FORM_12_DIC_DCSSI = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_12',
        'key' => 'pollution_form12_two',
        'label' => "2. Is the unit registered with the DIC or DCSSI of the State Government or Union Territory? If yes, attach a copy.",
        'disk' => 'public',
        'folder' => 'pollution/12/attachments'
    ];
    const POLLUTION_FORM_12_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_12',
        'key' => 'pollution_form12_signature',
        'label' => "Signature",
        'disk' => 'public',
        'folder' => 'pollution/12/attachments'
    ];
    const POLLUTION_FORM_13_COMPLIANCE_STATUS = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_13',
        'key' => 'pollution_form13_nine',
        'label' => "(9) Attach status of compliance to environmental conditions, if any specified during grant of Consent or registration",
        'disk' => 'public',
        'folder' => 'pollution/13/attachments'
    ];
    const POLLUTION_FORM_13_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_13',
        'key' => 'pollution_form13_signature',
        'label' => "Signature of The Applicant",
        'disk' => 'public',
        'folder' => 'pollution/13/attachments'
    ];

    const POLLUTION_FORM_14_INFRASTRUCTURE1 = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_14',
        'key' => 'pollution_form14_eleven',
        'label' => "(11) Attach details of infrastructure put in place for management of plastic waste generated in the area under jurisdiction",
        'disk' => 'public',
        'folder' => 'pollution/14/attachments'
    ];
    const POLLUTION_FORM_14_INFRASTRUCTURE2 = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_14',
        'key' => 'pollution_form14_twelve',
        'label' => "(12) Attach details of infrastructure required, if any along with justification",
        'disk' => 'public',
        'folder' => 'pollution/14/attachments'
    ];
    const POLLUTION_FORM_14_ACTION_PLAN = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_14',
        'key' => 'pollution_form14_twenty_two',
        'label' => "(22) Whether an Action Plan has been prepared for improving solid waste management practices in the city? If yes (attach copy)",
        'disk' => 'public',
        'folder' => 'pollution/14/attachments'
    ];

    const POLLUTION_FORM_15_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_15',
        'key' => 'pollution_form15_signature',
        'label' => "Signature of the authorized person",
        'disk' => 'public',
        'folder' => 'pollution/15/attachments'
    ];
    const POLLUTION_FORM_16_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_16',
        'key' => 'pollution_form16_signature',
        'label' => "Signature of the Importer",
        'disk' => 'public',
        'folder' => 'pollution/16/attachments'
    ];

    const POLLUTION_FORM_17_ERP = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_17',
        'key' => 'pollution_form17_partA_four',
        'label' => "
        <label class='zlabel'>
        4. Provide copy of the Emergency Response Plan (ERP) which should
        address proceduresfor dealing with emergency situations (viz. Spillage
        or release or fire) as specified in the guidelines of Central Pollution
        Control Board. Such ERP shall comprise the following but not limited to:
        <br />
        <div class='q-ml-md'>
          * Containing and controlling incidents so as to minimize the effects
          and to limit danger to the persons, environment and property; <br />

          * Implementing the measures necessary to protect persons and the
          environment; <br />

          * Description of the actions which should be taken to control the
          conditions at events and to limit their consequences, including a
          description of the safety equipment and resources available; <br />

          * Arrangements for training staff in the duties which they are
          expected to perform; <br />

          *Arrangements for informing concerned authorities and emergency
          services; and Arrangements for providing assistance with off-site
          mitigatory action
        </div>
   </label>",
        'disk' => 'public',
        'folder' => 'pollution/17/attachments'
    ];
    const POLLUTION_FORM_17_PROCESS_FLOW = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_17',
        'key' => 'pollution_form17_partB_one_b',
        'label' => "1.(b) Process description including process flow sheet indicating inputs and outputs (raw materials, chemicals, products, by-products, wastes, emissions, waste water etc.)",
        'disk' => 'public',
        'folder' => 'pollution/17/attachments'
    ];
    const POLLUTION_FORM_17_ENV_CLEARANCE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_17',
        'key' => 'pollution_form17_partC_three',
        'label' => "3. Attach a copy of prior Environmental Clearance.",
        'disk' => 'public',
        'folder' => 'pollution/17/attachments'
    ];
    const POLLUTION_FORM_17_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_17',
        'key' => 'pollution_form17_signature',
        'label' => "Signature of the Applicant",
        'disk' => 'public',
        'folder' => 'pollution/17/attachments'
    ];

    const POLLUTION_FORM_18_LIST = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_18',
        'key' => 'pollution_form18_enclose',
        'label' => "Enclose a list.",
        'disk' => 'public',
        'folder' => 'pollution/18/attachments'
    ];


    const POLLUTION_FORM_19_ATTACH_MAP = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_19',
        'key' => 'pollution_form19_five_attach',
        'label' => "Attach Map A Map With GPS Locations Of CBMWTF And Area Of Coverage).",
        'disk' => 'public',
        'folder' => 'pollution/19/attachments'
    ];
    const POLLUTION_FORM_19_CONTINGENCY_PLAN = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_19',
        'key' => 'pollution_form19_seven_ii',
        'label' => "7. ii) Contingency Plan Of Common Bio-medical Waste Treatment Facility (CBWTF)(attach Documents",
        'disk' => 'public',
        'folder' => 'pollution/19/attachments'
    ];
    
    const POLLUTION_FORM_19_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'POLLUTION_FORM_19',
        'key' => 'pollution_form19_signature',
        'label' => "Signature of the Applicant ",
        'disk' => 'public',
        'folder' => 'pollution/19/attachments'
    ];
    const INDUSTRIES_FACTORY_SHED_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'C&E_FACTORY_SHED',
        'key' => 'commerce_factory_shed_signature',
        'label' => "Signature of the Applicant ",
        'disk' => 'public',
        'folder' => 'industries/4/attachments'
    ];
    const INDUSTRIES_FORM_9_SIGNATURE = [
        'mime' => 'images/*',
        'application_code' => 'C&E_FORM_9',
        'key' => 'commerce_form9_signature',
        'label' => "Signature of the Applicant ",
        'disk' => 'public',
        'folder' => 'industries/9/attachments'
    ];
    const INDUSTRIES_POWER_LINE = [
        'mime' => 'images/*',
        'application_code' => 'C&E_POWER_LINE',
        'key' => 'commerce_power_line_signature',
        'label' => "Signature of the Applicant ",
        'disk' => 'public',
        'folder' => 'industries/7/attachments'
    ];










    // const ATTACHMENTS = [
    //     'pollution_consent_general_ev_3_1_2_a' => self::POLLUTION_CONSENT_INDUSTRIES_MAP,
    //     'pollution_consent_signature' => self::POLLUTION_CONSENT_INDUSTRIES_SIGNATURE,

    // ];
}
