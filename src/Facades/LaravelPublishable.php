<?php

namespace Telkins\LaravelPublishable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Telkins\LaravelPublishable\LaravelPublishable
 */
class LaravelPublishable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Telkins\LaravelPublishable\LaravelPublishable::class;
    }
}
