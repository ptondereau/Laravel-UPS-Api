<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsAddressValidation;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\AddressValidation;

/**
 * This is the UpsAddressValidationTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsAddressValidationTest extends TestCase
{
    use FacadeTrait;

    protected static function getFacadeAccessor(): string
    {
        return 'ups.address-validation';
    }

    protected static function getFacadeClass(): string
    {
        return UpsAddressValidation::class;
    }

    protected static function getFacadeRoot(): string
    {
        return AddressValidation::class;
    }
}
