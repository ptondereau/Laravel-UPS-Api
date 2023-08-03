<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Locator facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 * @mixin \Ups\Locator
 */
class UpsLocator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.locator';
    }
}
