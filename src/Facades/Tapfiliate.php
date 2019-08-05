<?php

namespace LegacyBeta\Tapfiliate\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Tapfiliate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tapfiliate';
    }
}