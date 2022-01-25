<?php

namespace App\Utils;

class HmangaihaUtil
{
    public const APPLICATIONS = [
        'LEGAL_LICENCE_MANUFACTURING' => [
            'legal_name_manufcaturing',
            'legal_address',
            'legal_date_establishment',
            'legal_father_husband_name',
            'legal_current_registration_number',
            'legal_nature_manufacturing',
            'legal_type',
            'legal_type_weight',
            'legal_type_measures',
            'legal_type_weighing_instrument',
            'legal_type_measuring_instrument',
            'legal_number_of_emp',
            'legal_number_of_skilled_emp',
            'legal_number_of_semiskilled_emp',
            'legal_number_of_unskilled_emp',
            'legal_number_of_specialist',
            'legal_trademark',
            'legal_machinery_details',
            'legal_foundry_details',
            'legal_steel_facilities',
            'legal_electricity_availability',
            'legal_loan_received',
            'legal_bankers',
            'legal_TAX_number',
            'legal_previous_licence_application',
            'legal_item_proposed_selling',
            'legal_model_approved_details',

        ],
        'LEGAL_LICENCE_RENEWAL_MANUFACTURER' => [
            'legal_renewal_manufacturer_one',
            'legal_renewal_manufacturer_two',
            'legal_renewal_manufacturer_three',
            'legal_renewal_manufacturer_four_a',
            'legal_renewal_manufacturer_four_b',
            'legal_renewal_manufacturer_five',
            'legal_renewal_manufacturer_six',
            'legal_renewal_manufacturer_seven',
            'legal_renewal_manufacturer_eight',
            'legal_renewal_manufacturer_nine',
        ],
        'LEGAL_DEALER_RENEWAL' => [
            'legal_dealer_renewal_one',
            'legal_dealer_renewal_two',
            'legal_dealer_renewal_three',
            'legal_dealer_renewal_four',
            'legal_dealer_renewal_five',
            'legal_dealer_renewal_six',
            'legal_dealer_renewal_seven',
            'legal_dealer_renewal_eight',
        ],
        'LEGAL_LICENCE_REPAIR' => [
            'legal_licence_repair_one',
            'legal_licence_repair_two',
            'legal_licence_repair_three_a',
            'legal_licence_repair_three_b',
            'legal_licence_repair_four',
            'legal_licence_repair_five',
            'legal_licence_repair_six',
            'legal_licence_repair_seven',
            'legal_licence_repair_eight',
            'legal_licence_repair_nine',
            'legal_licence_repair_ten_1',
            'legal_licence_repair_ten_2',
            'legal_licence_repair_ten_3',
            'legal_licence_repair_ten_4',
            'legal_licence_repair_eleven',
            'legal_licence_repair_twelve',
            'legal_licence_repair_thirteen',
            'legal_licence_repair_fourteen',
        ],
        'LEGAL_LICENCE_DEALER' => [
            'legal_licence_dealer_one',
            'legal_licence_dealer_two',
            'legal_licence_dealer_three',
            'legal_licence_dealer_four',
            'legal_licence_dealer_five',
            'legal_licence_dealer_six',
            'legal_licence_dealer_seven',
            'legal_licence_dealer_eight_a',
            'legal_licence_dealer_eight_b',
            'legal_licence_dealer_nine',
        ],
        'LEGAL_REGISTRATION_MANUFACTURER_PACKER' => [

            'legal_registration_manufacturer_one',
            'legal_registration_manufacturer_two',
            'legal_registration_manufacturer_three',
            'legal_registration_manufacturer_four',
            'legal_registration_manufacturer_five',
            'legal_registration_manufacturer_six',
            'legal_registration_manufacturer_seven',
            'legal_registration_manufacturer_eight_from',
            'legal_registration_manufacturer_eight_to',
            'legal_registration_manufacturer_registration_no',
            'legal_registration_manufacturer_registration_year',

        ],
        'LEGAL_REGISTRATION_IMPORTER_PACKER'=>[
            'legal_registration_importer_two',
            'legal_registration_importer_three',
            'legal_registration_importer_four',
            'legal_registration_importer_one',
            'legal_registration_importer_five',
            'legal_registration_importer_six',
            'legal_registration_importer_seven',
            'legal_registration_importer_eight',
            'legal_registration_importer_nine',

            'legal_registration_importer_nine_from',
            'legal_registration_importer_nine_to',
            'legal_registration_importer_registration_no',
            'legal_registration_importer_registration_year',
    
        ],
        'LEGAL_LICENCE_RENEWAL_REPAIRER'=>[
            'legal_license_renewal_repairer_two',
            'legal_license_renewal_repairer_one',
            'legal_license_renewal_repairer_three',
            'legal_license_renewal_repairer_four',
            'legal_license_renewal_repairer_five',
            'legal_license_renewal_repairer_six_a',
            'legal_license_renewal_repairer_six_b',
            'legal_license_renewal_repairer_seven',
            'legal_license_renewal_repairer_eight',
            'legal_license_renewal_repairer_nine',
      
        ],
        'LEGAL_LICENCE_REGISTRATION_IMPORTER'=>[
            'legal_licence_registration_importer_one',
            'legal_licence_registration_importer_two',
            'legal_licence_registration_importer_three',
            'legal_licence_registration_importer_four',
            'legal_licence_registration_importer_five',
            'legal_licence_registration_importer_five_a',
            'legal_licence_registration_importer_five_b',
            'legal_licence_registration_importer_six',
            'legal_licence_registration_importer_seven',
            'legal_licence_registration_importer_eight',
            'legal_licence_registration_importer_nine',
            'legal_licence_registration_importer_registration_fee',
            'legal_licence_registration_importer_registration_place',
            'legal_licence_registration_importer_registration_chalan_no',
            'legal_licence_registration_importer_registration_dated',
      
        ]


    ];


    public const LABELS = [
        'legal_name_manufcaturing' => "1.Name of the manufacturing concern for which licence is desired.",
        'legal_address' => "2.Complete address of the concern. Whether premises are
        owned/rented/taken on lease/leave licence, duly supported by documents.",
        'legal_date_establishment' => "3. Date of Establishment of workshop/factory.",
        'legal_father_husband_name' => " 4. Name (s) and address (s) along with their father's/ husband's name
        of proprietor (s) and/or Partners and Managing Director (s) in the
        case of Limited company",
        'legal_current_registration_number' => " 5. The date and current registration number of factory/ shop/
        establishment/ Municipal Trade licence.",
        'legal_nature_manufacturing' => "6. Nature of manufacturing activities at present.",
        'legal_type' => "7. The type of weights and measures proposed to be manufactured viz",
        'legal_type_weight' => "(i) Weights",
        'legal_type_measures' => "(ii) Measures",
        'legal_type_weighing_instrument' => "(iii) Weighing Instruments",
        'legal_type_measuring_instrument' => "(iv) Measuring Instruments with details in each case.",
        'legal_number_of_emp' => "8. The number of persons employed/proposed to be employed",
        'legal_number_of_skilled_emp' => " (i) Skilled",
        'legal_number_of_semiskilled_emp' => "(ii) Semi-skilled",
        'legal_number_of_unskilled_emp' => "(iii) Unskilled",
        'legal_number_of_specialist' => "(iv) Specialist trained in the line",
        'legal_trademark' => " 9. The monogram or trade mark intended to be Imprinted on weights and
        measures to be manufactured",
        'legal_machinery_details' => "10. Details of machinery, tools accessories, owned and used for
        manufacturing weights measures etc.",
        'legal_foundry_details' => "11. Details of foundry/workshop facilities arranged. Whether ownership,
        long term lease etc.",
        'legal_steel_facilities' => "12. Facilities of steel casting and hardness testing of Vital parts etc
        or other means.",
        'legal_electricity_availability' => "13. Availability of electric energy.",
        'legal_loan_received' => "14. Details of loan received from Government or financial Institution.
        If so, give details.",
        'legal_bankers' => "15. Name of bankers, if any.",
        'legal_TAX_number' => "16. VAT/ Sales Tax Registration Number/CST Number/ Professional Tax
        registration Number/IT Number.",
        'legal_previous_licence_application' => "17. Have you applied previously for a manufacturer's licence? If so,
        when and with what results ?",
        'legal_item_proposed_selling' => " (a) Whether the item (s) proposed to be manufactured will be sold
        within the State or out side the state or both.",
        'legal_model_approved_details' => "(b) Details of Model Approval received from Government of India.
        When can you produce for inspection samples of your products for
        which licence is desired ?",


        //legal licence renewal manufacturer
        'legal_renewal_manufacturer_one' => "1. Name and complete address of the manufacturing concern for which renewal_manufacturer of licence is desired.",
        'legal_renewal_manufacturer_two' => "2. Manufacturing Licence No.",
        'legal_renewal_manufacturer_three' => "3. Name (s) and address (s) along with their father's/husband's name of proprietor (s) and/or Partners and Managing Director (s) in the case of Limited company",
        'legal_renewal_manufacturer_four_a' => "(a) Type of weights and measures which are manufactured as per licence granted.",
        'legal_renewal_manufacturer_four_b' => "(b) Do you propose any change.",
        'legal_renewal_manufacturer_five' => " 5. The monogram or trade marks used on weights and measures manufactured by yo",
        'legal_renewal_manufacturer_six' => " 6. Details of workshop facilities available. ",
        'legal_renewal_manufacturer_seven' => "7. Details of production and sales in the last 5 years.",
        'legal_renewal_manufacturer_eight' => "8. Number and date of shop/establishment Registration Number.",
        'legal_renewal_manufacturer_nine' => "9. Registration Number of VAT/Sales Tax/CST/Professional Tax/Income Tax.",

        // legal dealer renewal
        'legal_dealer_renewal_one' => "1. Name of the establishment/shop/person seeking the renewal of licence",
        'legal_dealer_renewal_two' => "2. Dealer's Licence Number.",
        'legal_dealer_renewal_three' => "3. Date of establishment.",
        'legal_dealer_renewal_four' => " 4. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and Managing Director (s) in the case of Limited company",
        'legal_dealer_renewal_five' => "5. Registration Number and date of shop/establishment/ current Municipal Trade Licence.",
        'legal_dealer_renewal_six' => "6. Categories of weights and measures sold at present",
        'legal_dealer_renewal_seven' => "7. Registration Number of VAT/ CST/Sales Tax/Professional Tax/Income Tax.",
        'legal_dealer_renewal_eight' => "8. Are you intending to import weights and measures etc.
        from places outside the State/Country? If so, indicate
        sources of supply from the State (s)/Country (s).
        (Give details of manufacturer's trade mark/ monogram
        and his licence number.)",

        // legal licence repair
        'legal_licence_repair_one' => "1. Name of the concern seeking the licence.",
        'legal_licence_repair_two' => "2. Complete address of the workshop.",
        'legal_licence_repair_three_a' => "(a) Whether premises are owned/rented/taken. on lease dully supported by documents.",
        'legal_licence_repair_three_b' => "(b) Date of establishment.",
        'legal_licence_repair_four' => " 4. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and
        Managing Director (s) in the case of Limited company.",
        'legal_licence_repair_five' => "5. Number and date of shop/establishment/current 
        Municipal Trade Licence.",
        'legal_licence_repair_six' => "  6. Professional Tax/IT Tax registration Number etc if any.",
        'legal_licence_repair_seven' => "7. The type of weights and measures proposed to repaired.",
        'legal_licence_repair_eight' => "8. Area in which you wish to operate",
        'legal_licence_repair_nine' => "9. Previous experience in the line.",
        'legal_licence_repair_ten' => "10. Number of skilled staff employed or proposed to be employed:",
        'legal_licence_repair_ten_1' => "(i) Skilled",
        'legal_licence_repair_ten_2' => "(ii) Semi-skilled",
        'legal_licence_repair_ten_3' => "(iii) Unskilled",
        'legal_licence_repair_ten_4' => "(iv) Employees trained in the line",
        'legal_licence_repair_eleven' => "11. Details of machinery/tools/accessories available.",
        'legal_licence_repair_twelve' => "12. Availability of electric energy.",
        'legal_licence_repair_thirteen' => "13. Have you sufficient stock of loan/test weights. etc.? Give details",
        'legal_licence_repair_fourteen' => "14. Have you applied previously for a repairer's licence?
        If so, When and with what results?",


        // legal licence dealer
        'legal_licence_dealer_one' => "1. Name of the establishment/shop/person seeking the licence.",
        'legal_licence_dealer_two' => "2. Complete address of the establishment etc.",
        'legal_licence_dealer_three' => "3. Date of establishment.",
        'legal_licence_dealer_four' => "4. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and Managing Director (s) in the case of Limited company",
        'legal_licence_dealer_five' => "5. Number and date of Registration Number of current shop/establishment/Municipal Trade licence",
        'legal_licence_dealer_six' => "6. Categories of weights and measures sold/proposed to be sold at present",
        'legal_licence_dealer_seven' => "7. Registration Number of VAT/ CST/Sales Tax/Professional Tax/Income Tax.",
        'legal_licence_dealer_eight_a' => "(a) Registration of Importer of Weights and Measures, if any",
        'legal_licence_dealer_eight_b' => "(b) Approval of model imported into India by Central Government",
        'legal_licence_dealer_nine' => "9. Have you applied previously for a dealer's licence,either in this State or elsewhere ? If so give details ?",

        //Legal registration Manufacturer and PACKER
        'legal_registration_manufacturer_one'=>"1. Name",
        'legal_registration_manufacturer_two'=>"2. Complete Address",
        'legal_registration_manufacturer_three'=>"3. Aadhaar number",
        'legal_registration_manufacturer_four'=>"4. Address of warehouse",
        'legal_registration_manufacturer_five'=>"5. Type of Commodities to be manufactured or packed",
        'legal_registration_manufacturer_six'=>"6. Area of Operation",
        'legal_registration_manufacturer_seven'=>"7. Date of Registration",
        'legal_registration_manufacturer_eight'=> "8. This Registration is valid",
        'legal_registration_manufacturer_eight_from'=>"From",
        'legal_registration_manufacturer_eight_to'=>"to",
        'legal_registration_manufacturer_registration_no'=>"Registration no.",
        'legal_registration_manufacturer_registration_year'=>"of Year",

        //Legal Registration Manufacturer and Importer
        'legal_registration_importer_one'=>"1. Name",
        'legal_registration_importer_two'=>"2. Complete Address ",
        'legal_registration_importer_three'=>"3. Aadhaar number",
        'legal_registration_importer_four'=>"4. Address of warehouse",
        'legal_registration_importer_five'=>"5. Type of Commodities to be packed or to imported",
        'legal_registration_importer_six'=>"6. No. of IEC / Licence with date",
        'legal_registration_importer_seven'=>"7. Area of Operation",
        'legal_registration_importer_eight'=>"8. Date of Registration",
        'legal_registration_importer_nine'=>"9. This Registration is valid",
        'legal_registration_importer_nine_from'=>"From",
        'legal_registration_importer_nine_to'=>"to",
        'legal_registration_importer_registration_no'=>" Registration no.",
        'legal_registration_importer_registration_year'=>"Year",
        
        // legal licence renewal repair
        'legal_license_renewal_repairer_two'=>"1. Name and complete address of the repairing concern/ person seeking  renewal of the licence .",
        'legal_license_renewal_repairer_one'=>"2. Repairer's Licence Number.",
        'legal_license_renewal_repairer_three'=>"3. Name (s) and address (s) along with their father's/ husband's name of proprietor (s) and/or Partners and Managing Director (s) in the case of Limited company.",
        'legal_license_renewal_repairer_four'=>"4. Registration Number and date of current shop/ establishment/Municipal Trade Licence.",
        'legal_license_renewal_repairer_five'=>" 5. Registration Number of VAT/ Sales Tax/CST/Professional Tax/Income Tax",
        'legal_license_renewal_repairer_six_a'=>"(a) The Type of weights and measures repaired as per licence granted",
        'legal_license_renewal_repairer_six_b'=>"(b) Do you propose any change?",
        'legal_license_renewal_repairer_seven'=>"7. Area in which you are operating.",
        'legal_license_renewal_repairer_eight'=>"8. Have you sufficient stock of loan/test weights, etc.?",
        'legal_license_renewal_repairer_nine'=>"9. Please give details with particulars of stamping.",

        // LEGAL_LICENCE_REGISTRATION_IMPORTER
        'legal_licence_registration_importer_one'=>"1. Name and full address",
        'legal_licence_registration_importer_two'=>"2. Whether individual/undivided Hindu family/registered firm",
        'legal_licence_registration_importer_three'=>"3.Income-tax registration No( If any)",
        'legal_licence_registration_importer_four'=>"4.Date of registration as manufacturer/dealer;registration No. and name of  registry authority",
        'legal_licence_registration_importer_five'=>"5.Date & No. of licence to carry on the business of weights and measures;the name of authority by whom the licence was issued/renewed",
        'legal_licence_registration_importer_five_a'=>"(a)buying and selling ,or",
        'legal_licence_registration_importer_five_b'=>"(b) manufacturing",
        'legal_licence_registration_importer_six'=>"6.Item(s) of weights and measures in relation to which the applicant has been registered as manufacturer and/or dealer",
        'legal_licence_registration_importer_seven'=>"7.Items of weights and measures for which the applicant is being made for registration as importer",
        'legal_licence_registration_importer_eight'=>"8.Items,if any,imported during the period of two years immediately preceding the year in which the application is made:",
        'legal_licence_registration_importer_nine'=>"9.Remarks",
        'legal_licence_registration_importer_registration_fee'=>"Registration fee",
        'legal_licence_registration_importer_registration_place'=>"Paid in the treasury at",
        'legal_licence_registration_importer_registration_chalan_no'=>"Chalan No.",
        'legal_licence_registration_importer_registration_dated'=>"Dated",
  

    ];
}
