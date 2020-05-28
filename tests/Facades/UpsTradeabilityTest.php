<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsTradeability;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Tradeability;

/**
 * This is the UpsTradeabilityTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsTradeabilityTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor(): string
    {
        return 'ups.tradeability';
    }

    protected function getFacadeClass(): string
    {
        return UpsTradeability::class;
    }

    protected function getFacadeRoot(): string
    {
        return Tradeability::class;
    }
}
