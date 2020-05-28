<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsTracking;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Tracking;

/**
 * This is the UpsTrackingTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsTrackingTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.tracking';
    }

    protected function getFacadeClass(): string
    {
        return UpsTracking::class;
    }

    protected function getFacadeRoot(): string
    {
        return Tracking::class;
    }
}
