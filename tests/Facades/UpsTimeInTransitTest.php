<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsTimeInTransit;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\TimeInTransit;

/**
 * This is the UpsTimeInTransitTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsTimeInTransitTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.time-in-transit';
    }

    protected function getFacadeClass(): string
    {
        return UpsTimeInTransit::class;
    }

    protected function getFacadeRoot(): string
    {
        return TimeInTransit::class;
    }
}
