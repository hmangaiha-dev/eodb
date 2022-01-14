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

    const ATTACHMENTS = [
        'signature_phe_water_connection'=>self::SIGNATURE_PHE_WATER_CONNECTION
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
