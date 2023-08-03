<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the UpsAddressValidation facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 * @mixin \Ups\AddressValidation
 */
class UpsAddressValidation extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.address-validation';
    }
}
