<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsSimpleAddressValidation;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\SimpleAddressValidation;

/**
 * This is the UpsSimpleAddressValidationTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsSimpleAddressValidationTest extends TestCase
{
    use FacadeTrait;

    protected static function getFacadeAccessor(): string
    {
        return 'ups.simple-address-validation';
    }

    protected static function getFacadeClass(): string
    {
        return UpsSimpleAddressValidation::class;
    }

    protected static function getFacadeRoot(): string
    {
        return SimpleAddressValidation::class;
    }
}
