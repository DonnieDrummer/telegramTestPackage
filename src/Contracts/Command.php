<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 2/6/16
 * Time: 2:52 PM
 */

namespace Donnie\TelegramBot\Contracts;

abstract class Command
{

    protected $name;
    protected $description;
    protected $enable;

    abstract public function execute();
}