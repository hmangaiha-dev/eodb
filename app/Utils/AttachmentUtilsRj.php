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

    // const ATTACHMENTS = [
    //     'pollution_consent_general_ev_3_1_2_a' => self::POLLUTION_CONSENT_INDUSTRIES_MAP,
    //     'pollution_consent_signature' => self::POLLUTION_CONSENT_INDUSTRIES_SIGNATURE,

    // ];
}
