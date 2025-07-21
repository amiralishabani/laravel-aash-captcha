<?php

use Illuminate\Support\Facades\Route;
use AashCaptcha\Http\Controllers\CaptchaController;

Route::get('aash-captcha/image', [CaptchaController::class, 'image']);
Route::get('aash-captcha/audio', [CaptchaController::class, 'audio']);