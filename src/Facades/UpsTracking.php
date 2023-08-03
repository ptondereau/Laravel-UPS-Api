<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Tracking facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 * @mixin \Ups\Tracking
 */
class UpsTracking extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.tracking';
    }
}
