<?php

/**
 * Thanks to phirschybar for the basic idea of using base conversions for short urls
 * https://stackoverflow.com/a/8574378/7745708
 */

namespace Webmasters\Utilities\Numbers;

class BaseConverter
{
    protected static $shifting = 0;
    
    public static function setShifting($shifting)
    {
        if (!is_int($shifting)) {
            trigger_error('Shifting must be a number', E_USER_ERROR);
        }
        
        self::$shifting = $shifting;
    }

    public static function toBase36($base10)
    {
        return self::baseConvert($base10 + self::$shifting, 10, 36);
    }

    public static function toBase10($base36)
    {
        return self::baseConvert($base36, 36, 10) - self::$shifting;
    }
    
    protected static function baseConvert($number, $fromBase, $toBase)
    {
        if (function_exists('Phlib\base_convert')) {
            $result = \Phlib\base_convert($number, $fromBase, $toBase);
        } else {
            $result = base_convert($number, $fromBase, $toBase);
        }
        
        return $result;
    }
}
