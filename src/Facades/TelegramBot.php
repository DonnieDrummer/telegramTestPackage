<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:35 PM
 */

namespace Donnie\TelegramBot\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramBot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'telegramBot';
    }

}