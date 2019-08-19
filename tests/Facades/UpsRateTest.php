<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsRate;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Rate;

/**
 * This is the UpsRateTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsRateTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.rate';
    }

    protected function getFacadeClass(): string
    {
        return UpsRate::class;
    }

    protected function getFacadeRoot(): string
    {
        return Rate::class;
    }
}
