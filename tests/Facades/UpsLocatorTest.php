<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsLocator;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Locator;

/**
 * This is the UpsLocatorTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsLocatorTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.locator';
    }

    protected function getFacadeClass(): string
    {
        return UpsLocator::class;
    }

    protected function getFacadeRoot(): string
    {
        return Locator::class;
    }
}
