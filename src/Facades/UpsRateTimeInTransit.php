<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the RateTimeInTransit facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsRateTimeInTransit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.ratetimeintransit';
    }
}
