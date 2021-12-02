<?php

namespace App\Utils;

class KeysUtil
{
    const APPLICATIONS = [
        'CODE1' => [

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

        'C&E_INTEREST' => [

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
