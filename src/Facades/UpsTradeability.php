<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Tradeability facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 * @mixin \Ups\Tradeability
 */
class UpsTradeability extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.tradeability';
    }
}
