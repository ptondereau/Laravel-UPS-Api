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

    protected static function getFacadeAccessor(): string
    {
        return 'ups.time-in-transit';
    }

    protected static function getFacadeClass(): string
    {
        return UpsTimeInTransit::class;
    }

    protected static function getFacadeRoot(): string
    {
        return TimeInTransit::class;
    }
}
