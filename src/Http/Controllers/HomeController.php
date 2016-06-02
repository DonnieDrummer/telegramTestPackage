<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:41 PM
 */

namespace Donnie\TelegramBot\Http\Controllers;

use Illuminate\Routing\Controller;
use Donnie\TelegramBot\Builders\Answer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndexAction(Request $request)
    {
        \Log::alert(\GuzzleHttp\json_encode($request->all()));
    }
}