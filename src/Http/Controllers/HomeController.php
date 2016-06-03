<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:41 PM
 */

namespace Donnie\TelegramBot\Http\Controllers;

use Donnie\TelegramBot\Entities\Conversation;
use Donnie\TelegramBot\Entities\User;
use Illuminate\Routing\Controller;
use Donnie\TelegramBot\Builders\Answer;
use Illuminate\Http\Request;
use TelegramBot;
use LRedis;

class HomeController extends Controller
{
    public function getIndexAction(Request $request)
    {
        $redis = LRedis::connection();
        $message = $request->get('message');
        $conversation = new Conversation($message['from']['id'], $message['chat']['id']);
        $user = new User($message['from']['first_name'], $message['from']['last_name']);
        $redis->rpush($conversation->getChatId(), json_encode(['username' => $user->getFullName(), 'message' => $message['text']]));
        $answer = Answer::generate($message['text']);
        $redis->rpush($conversation->getChatId(), json_encode(['username' => 'Bot', 'message' => $answer]));
        TelegramBot::reply($conversation, view('telegramBot::index', ['value' => $answer])->render());
    }
    
    public function getInitAction()
    {
        TelegramBot::initWebhook();
    }
}