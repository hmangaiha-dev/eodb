<?php

namespace App\Utils;

class KeysUtil
{
    const APPLICATIONS = [
        'C&E_ALLOTMENT_PLOT' => [

            'applicant_name',
            'industrial_location_name',


            'communication_address',
            'communication_street',
            'communication_city',
            'communication_pin_no',
            'communication_house_no',
            'communication_office_phn',
            'communication_residence_phn',
            'communication_mobile_phn',
            'communication_email',
            'communication_website',
            'communication_district',


            'proposed_or_existing',

            'proposed_street',
            'proposed_city',

            'proposed_house_no',
            'proposed_office_phn',
            'proposed_residence_phn',
            'proposed_mobile_phn',



            'enterprise_name',
            'enterprise_category',
            'nature_activity',
            'incase_others',
            'isAncillary',
            'if_yes',
            'organization_type',
            'product_manufacture',
            'service_provided',
            'proposed_investment',
            'installed_capacity',
            'area_plot',
            'no_of_ready_build',
            'electric_power',
            'daily_water',

            // 'applicant_signature: ',
            // 'reg_certificate',
            // 'voters_id'

        ],

        'C&E_INTEREST_SUBSIDY' => [
            "cne_interest_subsidy_one",
            "cne_interest_subsidy_oneA",
            "cne_interest_subsidy_oneB",
            "cne_interest_subsidy_oneB1",
            "cne_interest_subsidy_oneB2",
            "cne_interest_subsidy_oneC",
            "cne_interest_subsidy_oneC1",
            "cne_interest_subsidy_oneC2",
            "cne_interest_subsidy_oneD",
            "cne_interest_subsidy_oneD1",
            "cne_interest_subsidy_oneD2",
            "cne_interest_subsidy_two",
            "cne_interest_subsidy_twoA",
            "cne_interest_subsidy_towA1",
            "cne_interest_subsidy_twoA2",
            "cne_interest_subsidy_twoB",
            "cne_interest_subsidy_three",
            "cne_interest_subsidy_threeA",
            "cne_interest_subsidy_threeB",
            "cne_interest_subsidy_four",
            "cne_interest_subsidy_fourA",
            "cne_interest_subsidy_fourB",
            "cne_interest_subsidy_five",
            "cne_interest_subsidy_fiveA",
            "cne_interest_subsidy_fiveA1",
            "cne_interest_subsidy_fiveA2",
            "cne_interest_subsidy_fiveB",
            "cne_interest_subsidy_fiveB1",
            "cne_interest_subsidy_fiveB2",
            "cne_interest_subsidy_fiveC",
            "cne_interest_subsidy_fiveC1",
            "cne_interest_subsidy_fiveC2",
            "cne_interest_subsidy_fiveD",
            "cne_interest_subsidy_six",
            "cne_interest_subsidy_seven",
            "cne_interest_subsidy_seven1",
            "cne_interest_subsidy_seven2",
            "cne_interest_subsidy_eight",
            "cne_interest_subsidy_eightA",
            "cne_interest_subsidy_eightA1",
            "cne_interest_subsidy_eightA2",
            "cne_interest_subsidy_eightB",
            "cne_interest_subsidy_eightBTitle",
            "cne_interest_subsidy_eightBTitle1",
            "cne_interest_subsidy_eightBTitl11",
            "cne_interest_subsidy_eightBTitl12",
            "cne_interest_subsidy_eightBTitle2",
            "cne_interest_subsidy_eightBTitle21",
            "cne_interest_subsidy_eightBTitle22",
            "cne_interest_subsidy_nine",
            "cne_interest_subsidy_nineA",
            "cne_interest_subsidy_nineAnewUnit",
            "cne_interest_subsidy_nineAexist",
            "cne_interest_subsidy_nineAexist1",
            "cne_interest_subsidy_nineAexist2",
            "cne_interest_subsidy_nineB",
            "cne_interest_subsidy_nineB1",
            "cne_interest_subsidy_nineB1newUnit",
            "cne_interest_subsidy_nineB1exist",
            "cne_interest_subsidy_nineB1exist1",
            "cne_interest_subsidy_nineB1exist2",
            "cne_interest_subsidy_nineB2",
            "cne_interest_subsidy_nineB2newUnit",
            "cne_interest_subsidy_nineB2exist",
            "cne_interest_subsidy_nineB2exist1",
            "cne_interest_subsidy_nineB2exist2",
            "cne_interest_subsidy_nineC",
            "cne_interest_subsidy_nineCnewUnit",
            "cne_interest_subsidy_nineCexist",
            "cne_interest_subsidy_nineCexist1",
            "cne_interest_subsidy_nineCexist2",
            "cne_interest_subsidy_nineD",
            "cne_interest_subsidy_nineDnewUnit",
            "cne_interest_subsidy_nineDexist",
            "cne_interest_subsidy_nineDexist1",
            "cne_interest_subsidy_nineDexist2",
            "cne_interest_subsidy_nineE",
            "cne_interest_subsidy_nineEnewUnit",
            "cne_interest_subsidy_nineEexist",
            "cne_interest_subsidy_nineEexist1",
            "cne_interest_subsidy_nineEexist2",
            "cne_interest_subsidy_nineF",
            "cne_interest_subsidy_nineFnewUnit",
            "cne_interest_subsidy_nineFexist",
            "cne_interest_subsidy_nineFexist1",
            "cne_interest_subsidy_nineFexist2",
            "cne_interest_subsidy_total",
            "cne_interest_subsidy_totalnewUnit",
            "cne_interest_subsidy_totalexist",
            "cne_interest_subsidy_totalexist1",
            "cne_interest_subsidy_totalexist2",
            "cne_interest_subsidy_ten",
            "cne_interest_subsidy_eleven",
            "cne_interest_subsidy_elevenA",
            "cne_interest_subsidy_elevenA1",
            "cne_interest_subsidy_elevenB",
            "cne_interest_subsidy_elevenB1",
            "cne_interest_subsidy_elevenB2",
            "cne_interest_subsidy_twelve",
            "cne_interest_subsidy_twelveA",
            "cne_interest_subsidy_twelveB",
            "cne_interest_subsidy_thirteen",
            "cne_interest_subsidy_thirteenA",
            "cne_interest_subsidy_thirteenB",
            "cne_interest_subsidy_thirteenC",
            "cne_interest_subsidy_thirteenC1",
            "cne_interest_subsidy_thirteenC2",
            "cne_interest_subsidy_fourteen",
            "cne_interest_subsidy_fifteen",
        ],

        'POWER_NEW_CONNECTION' => [
            "power_new_connection_applicant_name",
            "power_new_connection_father_name",
            "power_new_connection_communication_address",
            "power_new_connection_communication_house",
            "power_new_connection_communication_street",
            "power_new_connection_communication_area",
            "power_new_connection_communication_district",
            "power_new_connection_connection_address",
            "power_new_connection_connection_house",
            "power_new_connection_connection_street",
            "power_new_connection_connection_area",
            "power_new_connection_connection_district",
            "power_new_connection_supply_category",
            "power_new_connection_supply_purpose",
            "power_new_connection_total_load",
            "power_new_connection_supply_type",
            "power_new_connection_is_temporary",
            "power_new_connection_temporay_from",
            "power_new_connection_temporay_to",
            "power_new_connection_is_laying_service",
            "power_new_connection_own_meter",
            // "power_new_connection_applicant_type",
            // "power_new_connection_photo",
            "power_new_connection_for",
            // "power_new_connection_identity_proof"
        ],

        'FIRE_NOC' => [
            
        ]
    ];

    const LABELS = [


        'applicant_name' => 'Applicant Name',
        'industrial_location_name' => 'Name & Location of Industrial Area',

        'communication_address' => 'Address for Communications',
        'communication_street' => 'Steet',
        'communication_city' => 'City/Town/Village',
        'communication_pin_no' => 'PIN No',
        'communication_house_no' => 'House No',
        'communication_office_phn' => 'Office Phone Number',
        'communication_residence_phn' => 'Residense Phone Number',
        'communication_mobile_phn' => 'Mobile Phone',
        'communication_email' => 'Email Address',
        'communication_website' => 'Website',
        'communication_district' => 'District',

        'proposed_or_existing' => 'Whether Proposed Or Existing Unit If Existing, Detail Address Of The Unit: Proposed/Existing.',

        'proposed_street' => 'street',
        'proposed_city' => 'city',
        'proposed_house_no' => 'House No',
        'proposed_office_phn' => 'Office No',
        'proposed_residence_phn' => 'Residence No',
        'proposed_mobile_phn' => 'Mobile No',

        'enterprise_name' => 'Name of the Enterprise',
        'enterprise_category' => 'Category Of Enterprise ',
        'nature_activity' => 'Nature Of Activity',
        'incase_others' => 'Whether The Unit Is Ancillary',
        'isAncillary' => 'Incase Of Others, Please Specify',
        'if_yes' => 'If Yes, Give Detail',
        'organization_type' => 'Type Of Organization',
        'product_manufacture' => 'Product To Be Manufacture ',
        'service_provided' => 'Service To Be Provided',
        'proposed_investment' => 'Proposed Investment In Fixed Assets (Rs. In Lakhs)',
        'installed_capacity' => 'Installed Capacity',
        'area_plot' => 'Area In Plot Required',
        'no_of_ready_build' => 'No. Of Ready Build Shed Required ',
        'electric_power' => 'Requirement Of Electric Power',
        'daily_water' => 'Daily Requirement Of Water',










        "power_new_connection_applicant_name" => "1.Name of the Applicant/Organization",
        "power_new_connection_father_name" => "2.Name of Father/ Husband/ Director/ Partner/ Trustee*",
        "power_new_connection_communication_address" => "Address for communication",
        "power_new_connection_communication_house" => "House/Plot/Premise No",
        "power_new_connection_communication_street" => "Street",
        "power_new_connection_communication_area" => "Area/Colony",
        "power_new_connection_communication_district" => "District",
        "power_new_connection_connection_address" => "Address of where the new connection is applied for/existing connection is required to be shifted",
        "power_new_connection_connection_house" => "House/Plot/Premise No",
        "power_new_connection_connection_street" => "Street",
        "power_new_connection_connection_area" => "Area/Colony",
        "power_new_connection_connection_district" => "District",
        "power_new_connection_supply_category" => "4.Category of Supply",
        "power_new_connection_supply_purpose" => "5.Purpose of Supply",
        "power_new_connection_total_load" => "6.Total Contracted Load applied for (in kW)",
        "power_new_connection_supply_type" => "7.Type of Supply",
        "power_new_connection_is_temporary" => "8.If Temporary supply, specify period of requirement",
        "power_new_connection_temporay_from" => "From (date)",
        "power_new_connection_temporay_to" => "To (date)",
        "power_new_connection_is_laying_service" => "9.Please indicate whether you want to carry out the works of laying service line and/or dedicated distribution facility for the electricity supply requisitioned.",
        "power_new_connection_own_meter" => "10.Please indicate whether you want to install your own CEA approved meter. (Yes/No)",
        // "power_new_connection_applicant_type" => "Applicant is",
        "power_new_connection_for" => "Applicant is",














        "cne_interest_subsidy_one" => "1.",
        "cne_interest_subsidy_oneA" => "A) Name Of The Unit",
        "cne_interest_subsidy_oneB" => "B) Office Address With Telephone / Mobile No. )",
        "cne_interest_subsidy_oneB1" => "1) Office Address",
        "cne_interest_subsidy_oneB2" => "2. Mobile Number",
        "cne_interest_subsidy_oneC" => "C) Factory Address With Telephone No.",
        "cne_interest_subsidy_oneC1" => "1) Factory Address",
        "cne_interest_subsidy_oneC2" => "2. Telephone No.",
        "cne_interest_subsidy_oneD" => "D) Indicate The Claim No ( Say 1st Claim, 2nd Claim Etc)",
        "cne_interest_subsidy_oneD1" => "1) Factory Address",
        "cne_interest_subsidy_oneD2" => "2. Telephone No.",
        "cne_interest_subsidy_two" => "2",
        "cne_interest_subsidy_twoA" => "A)Registration Number Under NEIIPP, 2007 Along With Date)",
        "cne_interest_subsidy_towA1" => "1) Registration Number",
        "cne_interest_subsidy_twoA2" => "2. Date",
        "cne_interest_subsidy_twoB" => "B) Any Other Registration Number Required Statutorily/mandatorily",
        "cne_interest_subsidy_three" => "3. Constitution Of The Unit Alongwith Date (Proprietorship / Partnership / Private Limited / Limited Company / Cooperative Society )",
        "cne_interest_subsidy_threeA" => "A) Constitution Of The Unit",
        "cne_interest_subsidy_threeB" => "B) Date",
        "cne_interest_subsidy_four" => "4. Name/s , Address(es) Of The Proprietor/ Partners / Directors Of Board Of Directors / Secretary And President (as Applicable)",
        "cne_interest_subsidy_fourA" => "A) Name",
        "cne_interest_subsidy_fourB" => "B) Address",
        "cne_interest_subsidy_five" => "5. Details Of Enterprise Registration",
        "cne_interest_subsidy_fiveA" => "A) Acknowledgement Of Entrepreneur Memorandum(EM) Part-I, No & Date",
        "cne_interest_subsidy_fiveA1" => "1) Acknowledgement EM Number",
        "cne_interest_subsidy_fiveA2" => "2. Date",
        "cne_interest_subsidy_fiveB" => "B) Acknowledgement Of Entrepreneur Memorandum(EM) Part-II, No & Date",
        "cne_interest_subsidy_fiveB1" => "1) Acknowledgement EM Number",
        "cne_interest_subsidy_fiveB2" => "2. Date",
        "cne_interest_subsidy_fiveC" => "C) Acknowledgement Of Industrial Entrepreneur Memorandum (IEM) No & Date",
        "cne_interest_subsidy_fiveC1" => "1) Acknowledgement EM Number",
        "cne_interest_subsidy_fiveC2" => "2. Date",
        "cne_interest_subsidy_fiveD" => "D) Permanent Registration No In Case Of Existing Unit",
        "cne_interest_subsidy_six" => "6. Certificate Of The Unit Having Become Functional/operational (for Service Sector From Concerned Department)",
        "cne_interest_subsidy_seven" => "7.",
        "cne_interest_subsidy_seven1" => "1) Name Of The Product (for Manufacturing Sector )",
        "cne_interest_subsidy_seven2" => "2. Name Of The Activity (for Service Sector)",
        "cne_interest_subsidy_eight" => "8. Whether The Unit Is New Or An Existing Unit Under Going Substantial Expansion",
        "cne_interest_subsidy_eightA" => "A) In Case Of New Unit",
        "cne_interest_subsidy_eightA1" => "1) Date Of Commencement Of Production (Manufacturing Sector Units) ",
        "cne_interest_subsidy_eightA2" => "2. Date Of Becoming Operational (Service Sector Units)",
        "cne_interest_subsidy_eightB" => "B) In Case Of Existing Unit",
        "cne_interest_subsidy_eightBTitle" => "Date Of Going Into Commercial Production/becoming Operational",
        "cne_interest_subsidy_eightBTitle1" => "1) For Manufacturing Sector Units",
        "cne_interest_subsidy_eightBTitl11" => "1) Prior To Expansion ",
        "cne_interest_subsidy_eightBTitl12" => "2. After Expansion",
        "cne_interest_subsidy_eightBTitle2" => "2) For Service Sector Units",
        "cne_interest_subsidy_eightBTitle21" => "1) Prior To Expansion",
        "cne_interest_subsidy_eightBTitle22" => "2. After Expansion",
        "cne_interest_subsidy_nine" => "9. Capital Investment [to Be Supported By CA Certificate As Per Form-1D(A)(i)/Form:1D(A)(ii)] For Existing Unit",
        "cne_interest_subsidy_nineA" => "A) Land & Site Development",
        "cne_interest_subsidy_nineAnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineAexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineAexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineAexist2" => "2. After Expansion",
        "cne_interest_subsidy_nineB" => "B) Building",
        "cne_interest_subsidy_nineB1" => "1) Office Building",
        "cne_interest_subsidy_nineB1newUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineB1exist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineB1exist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineB1exist2" => "2. After Expansion",
        "cne_interest_subsidy_nineB2" => "2) Factory Building",
        "cne_interest_subsidy_nineB2newUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineB2exist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineB2exist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineB2exist2" => "2. After Expansion",
        "cne_interest_subsidy_nineC" => "C) Plant And Machinery /components/essential Items",
        "cne_interest_subsidy_nineCnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineCexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineCexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineCexist2" => "2. After Expansion",
        "cne_interest_subsidy_nineD" => "D) Accessories",
        "cne_interest_subsidy_nineDnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineDexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineDexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineDexist2" => "2. After Expansion",
        "cne_interest_subsidy_nineE" => "E) Miscellaneous Fixed Assets",
        "cne_interest_subsidy_nineEnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineEexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineEexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineEexist2" => "2. After Expansion",
        "cne_interest_subsidy_nineF" => "F) Preliminary And Preoperative Expanses",
        "cne_interest_subsidy_nineFnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_nineFexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_nineFexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_nineFexist2" => "2. After Expansion",
        "cne_interest_subsidy_total" => "Total",
        "cne_interest_subsidy_totalnewUnit" => "For New Unit (Amount In Rs.)",
        "cne_interest_subsidy_totalexist" => "For Existing Unit Undergoing Expansion (Amount In Rs.)",
        "cne_interest_subsidy_totalexist1" => "1) Prior To Expansion",
        "cne_interest_subsidy_totalexist2" => "2. After Expansion",
        "cne_interest_subsidy_ten" => "10. Increase In Investment (in Case Of Existing Unit)",
        "cne_interest_subsidy_eleven" => "11",
        "cne_interest_subsidy_elevenA" => "A) Annual Turnover Of The Unit",
        "cne_interest_subsidy_elevenA1" => "1) For New Unit (in Rs.)",
        "cne_interest_subsidy_elevenB" => "B) For Existing Unit Undergoing Expansion",
        "cne_interest_subsidy_elevenB1" => "1) Annual Turnover Before Expansion (in Rs)",
        "cne_interest_subsidy_elevenB2" => "2) Annual Turnover After Expansion (in Rs.)",
        "cne_interest_subsidy_twelve" => "12",
        "cne_interest_subsidy_twelveA" => "A) Names Of The Raw Materials Utilized With Quantity And Value During The Claim Period.",
        "cne_interest_subsidy_twelveB" => "B) Name Of The Finished Product(s) Alongwith Quantity And Value During The Claim Period.",
        "cne_interest_subsidy_thirteen" => "13",
        "cne_interest_subsidy_thirteenA" => "A) Name Of The Bank Branch Providing Working Capital Loan",
        "cne_interest_subsidy_thirteenB" => "B) Maximum Limit Of Working Capital Sanctioned Along With Rate Of Interest",
        "cne_interest_subsidy_thirteenC" => "C) Sanction No. & Date",
        "cne_interest_subsidy_thirteenC1" => "1) Sanction No.",
        "cne_interest_subsidy_thirteenC2" => "2) Sanction Date",
        "cne_interest_subsidy_fourteen" => "14. Remarks, If Any.",
        "cne_interest_subsidy_fifteen" => "15. Employment Generation In Various Fields Of Work (Executive, Non-executive, Skilled, Un-skilled Etc.)",




    ];

    public static function getApplicationKeys($applicationCode): array
    {
        return self::APPLICATIONS[$applicationCode];
    }

    public static function getApplicationLabel(string $key): string
    {
        return self::LABELS[$key];
    }
}
