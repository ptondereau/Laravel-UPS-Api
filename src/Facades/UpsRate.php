<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Rate facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsRate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.rate';
    }
}
