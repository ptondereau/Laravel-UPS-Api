<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsShipping;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Shipping;

/**
 * This is the UpsTradeabilityTest facade test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsShippingTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.shipping';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsShipping::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Shipping::class;
    }
}
