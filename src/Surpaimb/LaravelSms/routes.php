<?php

$routeAttr = config('laravel-sms.route', []);
unset($routeAttr['enable']);

$attributes = array_merge([
    'prefix' => 'laravel-sms',
], $routeAttr);

Route::group($attributes, function () {
    Route::get('info', 'Surpaimb\Sms\SmsController@getInfo');
    Route::post('verify-code', 'Surpaimb\Sms\SmsController@postSendCode');
    Route::post('voice-verify', 'Surpaimb\Sms\SmsController@postVoiceVerify');
});
