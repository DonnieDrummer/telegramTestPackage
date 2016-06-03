<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 2/6/16
 * Time: 4:09 PM
 */

namespace Donnie\TelegramBot\Builders;

/**
 * Class Answer
 * @package Donnie\TelegramBot\Builders
 */
class Answer
{
    /**
     * @const string
     */
    const FIZZ = 'fizz';
    /**
     * @const string
     */
    const BUZZ = 'buzz';

    /**
     * Generate answer to user.
     * 
     * @param $value
     * @return string|integer
     */
    public static function generate($value)
    {
        $return = '';
        
        if (is_numeric($value)) {
            if ($value >=1 && $value <= 100) {
                if (($value % 3) == 0) $return .= self::FIZZ;
                if (($value % 5) == 0) $return .= self::BUZZ;
                $return = ($return) ? : $value;
            } else {
                $return = 'Number must be from 1 to 100';
            }
        } elseif ($value == '/start') {
            $return = 'Please enter number from 1 to 100';
        } else {
            $return = 'You sent not number';
        }
        
        return $return;
    }

}