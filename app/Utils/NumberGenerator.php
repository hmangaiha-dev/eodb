<?php
namespace App\Utils;
class NumberGenerator{
    public static function fakeIdGenerator($application_code): string
    {
        return $application_code.'-' . now()->timestamp;
    }
}
