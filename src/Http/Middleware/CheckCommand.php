<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:50 PM
 */

namespace Donnie\TelegramBot\Http\Middleware;

use Closure;

/**
 * Checking requested command.
 * @package Donnie\TelegramBot\Http\Middleware
 */
class CheckCommand
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
    }

}