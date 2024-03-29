<?php

namespace Tangfastics\Facades;

use Illuminate\Support\Facades\Facade;

class Navigation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'navigation.builder';
    }
}
