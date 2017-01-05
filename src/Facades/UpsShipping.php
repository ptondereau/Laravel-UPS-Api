<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Tradeability facade class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsShipping extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ups.shipping';
    }
}
