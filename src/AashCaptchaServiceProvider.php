<?php

namespace AashCaptcha;

use Illuminate\Support\ServiceProvider;

class AashCaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'aashcaptcha');
        $this->publishes([__DIR__.'/../public' => public_path('vendor/aash-captcha')], 'public');
        $this->publishes([__DIR__.'/../src/config/aash-captcha.php' => config_path('aash-captcha.php')], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/aash-captcha.php', 'aash-captcha');
    }
}