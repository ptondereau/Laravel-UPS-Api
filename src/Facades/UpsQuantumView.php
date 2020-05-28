<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the QuantumView facade class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsQuantumView extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ups.quantum-view';
    }
}
