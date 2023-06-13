<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsQuantumView;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\QuantumView;

/**
 * This is the UpsQuantumViewTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsQuantumViewTest extends TestCase
{
    use FacadeTrait;

    protected static function getFacadeAccessor(): string
    {
        return 'ups.quantum-view';
    }

    protected static function getFacadeClass(): string
    {
        return UpsQuantumView::class;
    }

    protected static function getFacadeRoot(): string
    {
        return QuantumView::class;
    }
}
