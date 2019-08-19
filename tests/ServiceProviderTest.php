<?php

namespace Ptondereau\Tests\LaravelUpsApi;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Ups\AddressValidation;
use Ups\Locator;
use Ups\QuantumView;
use Ups\Rate;
use Ups\RateTimeInTransit;
use Ups\Shipping;
use Ups\SimpleAddressValidation;
use Ups\TimeInTransit;
use Ups\Tracking;
use Ups\Tradeability;

/**
 * This is the service provider test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class ServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function testAddressValidationIsInjectable()
    {
        $this->assertIsInjectable(AddressValidation::class);
    }

    public function testSimpleAddressValidationIsInjectable()
    {
        $this->assertIsInjectable(SimpleAddressValidation::class);
    }

    public function testQuantumViewIsInjectable()
    {
        $this->assertIsInjectable(QuantumView::class);
    }

    public function testTrackingIsInjectable()
    {
        $this->assertIsInjectable(Tracking::class);
    }

    public function testRateIsInjectable()
    {
        $this->assertIsInjectable(Rate::class);
    }

    public function testTimeInTransitIsInjectable()
    {
        $this->assertIsInjectable(TimeInTransit::class);
    }

    public function testLocatorIsInjectable()
    {
        $this->assertIsInjectable(Locator::class);
    }

    public function testTradeabilityIsInjectable()
    {
        $this->assertIsInjectable(Tradeability::class);
    }

    public function testShippingIsInjectable()
    {
        $this->assertIsInjectable(Shipping::class);
    }

    public function testRateTimeInTransitIsInjectable()
    {
        $this->assertIsInjectable(RateTimeInTransit::class);
    }
}
