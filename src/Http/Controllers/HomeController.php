<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:41 PM
 */

namespace Donnie\TelegramBot\Http\Controllers;

use Donnie\TelegramBot\Entities\Conversation;
use Illuminate\Routing\Controller;
use Donnie\TelegramBot\Builders\Answer;
use Illuminate\Http\Request;
use TelegramBot;
use LRedis;

class HomeController extends Controller
{
    public function getIndexAction(Request $request)
    {
        $message = $request->get('message');
        $conversation = new Conversation($message['from']['id'], $message['chat']['id']);
        $answer = Answer::generate($message['text']);

        LRedis::connection();

        TelegramBot::reply($conversation, view('telegramBot::index', ['value' => $answer])->render());
    }
    
    public function getInitAction()
    {
        TelegramBot::initWebhook();
    }
}