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
     * @param $number
     * @return string|integer
     */
    public static function generate($number)
    {
        $return = '';

        if (($number % 3) == 0) $return .= self::FIZZ;
        if (($number % 5) == 0) $return .= self::BUZZ;

        return ($return) ? : $number;
    }

}