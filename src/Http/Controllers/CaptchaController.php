<?php

namespace AashCaptcha\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use AashCaptcha\Helpers\CaptchaGenerator;

class CaptchaController extends Controller
{
    public function image()
    {
        $captcha = new CaptchaGenerator();
        return $captcha->renderImage();
    }

    public function audio()
    {
        $captcha = new CaptchaGenerator();
        return $captcha->renderAudio();
    }
}