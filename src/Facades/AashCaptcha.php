<?php

namespace AashCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class AashCaptcha extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aashcaptcha';
    }
}