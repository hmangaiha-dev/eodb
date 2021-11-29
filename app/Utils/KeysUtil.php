<?php
namespace App\Utils;
class KeysUtil{
    const APPLICATIONS = [
        'CODE1' => ['first_name', 'last_name'],
    ];

    const LABELS = [
        'first_name' => 'First name',
        'last_name' => 'Last name',
        'full_name' => 'Full name',
    ];

    public static function getApplicationKeys($applicationCode):array
    {
        return self::APPLICATIONS[$applicationCode];
    }

    public static function getApplicationLabel(string $key):string
    {
        return self::LABELS[$key];
    }

}
