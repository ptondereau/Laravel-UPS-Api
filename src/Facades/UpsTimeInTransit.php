<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the TimeInTransit facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsTimeInTransit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.time-in-transit';
    }
}
