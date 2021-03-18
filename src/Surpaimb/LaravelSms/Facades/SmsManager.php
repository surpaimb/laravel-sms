<?php

namespace Surpaimb\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class SmsManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Surpaimb\\Sms\\SmsManager';
    }
}
