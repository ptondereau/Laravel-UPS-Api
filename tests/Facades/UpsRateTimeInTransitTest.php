<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsRateTimeInTransit;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\RateTimeInTransit;

/**
 * This is the UpsRateTimeInTransitTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsRateTimeInTransitTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.ratetimeintransit';
    }

    protected function getFacadeClass(): string
    {
        return UpsRateTimeInTransit::class;
    }

    protected function getFacadeRoot(): string
    {
        return RateTimeInTransit::class;
    }
}
