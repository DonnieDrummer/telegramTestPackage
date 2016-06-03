<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:35 PM
 */

namespace Donnie\TelegramBot;

use Donnie\TelegramBot\Entities\Conversation;
use GuzzleHttp\Client;
use Config;

/**
 * Class TelegramBot.
 * 
 * @package Donnie\TelegramBot.
 */
class TelegramBot
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * TelegramBot constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->api_url = Config::get('telegramBot.api_url') . '/bot' . Config::get('telegramBot.bot_token') . '/';
    }

    /**
     *
     */
    public function initWebhook()
    {
        echo $this->api_url . 'setWebhook?url=' . Config::get('telegramBot.webhook_url');
        $this->client->request('GET', $this->api_url . 'setWebhook?url=' . Config::get('telegramBot.webhook_url'));
    }

    /**
     * Send reply.
     * 
     * @param Conversation $conversation.
     * @param string|Illuminate\View\View $message.
     * 
     * @return void.
     */
    public function reply($conversation, $message)
    {
        $response = $this->client->request('POST', $this->api_url . 'sendMessage', [
            'form_params' => [
                'chat_id' => $conversation->getChatId(),
                'text' => $message,
                'parse_mode' => 'html'
            ]
        ]);
    }
}