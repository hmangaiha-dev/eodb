<?php
namespace App\Utils;

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
    const LABOUR_CERTIFICATE_REGISTRATION_SIGNATURE=[
        'size'=>2048,
        'mime'=>'images/*',
        'application_code'=>'LABOUR_CERTIFICATE_REGISTRATION',
        'key'=>'labour_cert_reg_signature',
        'label'=>'Signature of applicant',
        'disk'=>'public',
        'folder'=>'labour/1/attachments'
    ];
    const LABOUR_EMPLOYMENT_CONTRACT_SIGNATURE=[
        'size'=>2048,
        'mime'=>'images/*',
        'application_code'=>'LABOUR_CERTIFICATE_REGISTRATION',
        'key'=>'labour_lic_reg_eleven_signature',
        'label'=>'Signature of the occupter',
        'disk'=>'public',
        'folder'=>'labour/2/attachments'
    ];

    const ATTACHMENTS = [
        'labour_cert_reg_signature'=>self::LABOUR_CERTIFICATE_REGISTRATION_SIGNATURE,
        'labour_lic_reg_eleven_signature'=>self::LABOUR_EMPLOYMENT_CONTRACT_SIGNATURE

    ];

    static function getAttachment(string $key)
    {
        return collect(self::ATTACHMENTS)->first(callback: fn($attachment) => $attachment['key'] == $key);
    }

    static function getAttachmentsByApplicationCode(string $application_code): array
    {
        return collect([...self::SIGNATURE_PHE_WATER_CONNECTION])
            ->filter(fn($attachment) => Str::lower($attachment['application_code']) == Str::lower($application_code))
            ->toArray();
    }

}
