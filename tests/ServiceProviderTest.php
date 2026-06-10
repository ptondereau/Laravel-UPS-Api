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

    public function testAddressValidationIsInjectable(): void
    {
        $this->assertIsInjectable(AddressValidation::class);
    }

    public function testSimpleAddressValidationIsInjectable(): void
    {
        $this->assertIsInjectable(SimpleAddressValidation::class);
    }

    public function testQuantumViewIsInjectable(): void
    {
        $this->assertIsInjectable(QuantumView::class);
    }

    public function testTrackingIsInjectable(): void
    {
        $this->assertIsInjectable(Tracking::class);
    }

    public function testRateIsInjectable(): void
    {
        $this->assertIsInjectable(Rate::class);
    }

    public function testTimeInTransitIsInjectable(): void
    {
        $this->assertIsInjectable(TimeInTransit::class);
    }

    public function testLocatorIsInjectable(): void
    {
        $this->assertIsInjectable(Locator::class);
    }

    public function testTradeabilityIsInjectable(): void
    {
        $this->assertIsInjectable(Tradeability::class);
    }

    public function testShippingIsInjectable(): void
    {
        $this->assertIsInjectable(Shipping::class);
    }

    public function testRateTimeInTransitIsInjectable(): void
    {
        $this->assertIsInjectable(RateTimeInTransit::class);
    }
}
