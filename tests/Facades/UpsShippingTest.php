<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsShipping;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Shipping;

/**
 * This is the UpsShippingTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsShippingTest extends TestCase
{
    use FacadeTrait;

    protected static function getFacadeAccessor(): string
    {
        return 'ups.shipping';
    }

    protected static function getFacadeClass(): string
    {
        return UpsShipping::class;
    }

    protected static function getFacadeRoot(): string
    {
        return Shipping::class;
    }
}
