<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 3/6/16
 * Time: 2:20 PM
 */

namespace Donnie\TelegramBot\Entities;

/**
 * Class User
 * @package Donnie\TelegramBot\Entities
 */
class User
{

    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;

    /**
     * User constructor.
     * 
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($firstName = '', $lastName = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
    
}