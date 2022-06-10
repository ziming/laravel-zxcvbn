<?php

namespace Ziming\LaravelZxcvbn\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ziming\LaravelZxcvbn\LaravelZxcvbn
 */
class LaravelZxcvbn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-zxcvbn';
    }
}
