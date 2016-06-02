<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:34 PM
 */

namespace Donnie\TelegramBot;

use Illuminate\Support\ServiceProvider;

class TelegramBotServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('telegramBot.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['telegramBot'] = $this->app->share(function ($app) {
            return new TelegramBot();
        });
    }
}