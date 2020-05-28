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

    protected function getFacadeAccessor(): string
    {
        return 'ups.shipping';
    }

    protected function getFacadeClass(): string
    {
        return UpsShipping::class;
    }

    protected function getFacadeRoot(): string
    {
        return Shipping::class;
    }
}
