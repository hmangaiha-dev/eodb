<?php

namespace App\Utils;

class KeysUtil
{
    const APPLICATIONS = [
        'CODE1' => [

            'applicant_name',


            'communication_address',
            'communication_street',
            'communication_city ',
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
            'proposed_pin_no',
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
    ];

    const LABELS = [


        'applicant_name' => 'Applicant Name',


        'communication_address' => 'Address for Communications',
        'communication_street' => 'Steet',
        'communication_city ' => 'City/Town/Village',
        'communication_pin_no' => 'PIN No',
        'communication_house_no' => 'House No',
        'communication_office_phn' => 'Office Phone Number',
        'communication_residence_phn' => 'Residense Phone Number',
        'communication_mobile_phn' => 'Mobile Phone',
        'communication_email' => 'Email Address',
        'communication_website' => 'Website',
        'communication_district' => 'District',



        'proposed_or_existing' => 'Whether Proposed Or Existing Unit If Existing, Detail Address Of The Unit: Proposed/Existing.',





        'proposed_street' => 'Proposed strreet',
        'proposed_city' => 'Proposed strreet',
        'proposed_pin_no' => 'Proposed strreet',
        'proposed_house_no' => 'Proposed strreet',
        'proposed_office_phn' => 'Proposed strreet',
        'proposed_residence_phn' => 'Proposed strreet',
        'proposed_mobile_phn' => 'Proposed strreet',





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
