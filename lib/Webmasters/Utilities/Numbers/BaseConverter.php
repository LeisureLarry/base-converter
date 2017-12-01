<?php

namespace Webmasters\Utilities\Numbers;

class BaseConverter
{
    protected static $shifting = 0;
    
    public static function setShifting($shifting)
    {
        self::$shifting = $shifting;
    }

    public static function toBase36($base10)
    {
        return base_convert($base10 + self::$shifting, 10, 36);
    }

    public static function toBase10($base36)
    {
        return base_convert($base36, 36, 10) - self::$shifting;
    }
}
