<?php

namespace Fatnaydev\Erpdashboard\Facades;

use Illuminate\Support\Facades\Facade;

class Erpdashboard extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'erpdashboard';
    }
}
