<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Shipping facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsShipping extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.shipping';
    }
}
