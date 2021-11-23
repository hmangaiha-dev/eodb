<?php
namespace App\Utils;
class NumberGenerator{
    public static function fakeIdGenerator(): string
    {
        return 'FAKE-' . now()->timestamp;
    }
}
