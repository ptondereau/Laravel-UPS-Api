<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the UpsSimpleAddressValidation facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsSimpleAddressValidation extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.simple-address-validation';
    }
}
