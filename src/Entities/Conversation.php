<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 2/6/16
 * Time: 3:01 PM
 */

namespace Donnie\TelegramBot\Entities;

/**
 * Class Conversation
 * @package Donnie\TelegramBot\Entities
 */
class Conversation
{
    /**
     * @var
     */
    protected $userId;
    /**
     * @var
     */
    protected $chatId;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChatId()
    {
        return $this->chatId;
    }

    /**
     * @param mixed $chatId
     * @return $this
     */
    public function setChatId($chatId)
    {
        $this->chatId = $chatId;
        
        return $this;
    }
    
}