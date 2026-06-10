<?php

namespace Laravel\Lumen;

use Illuminate\Container\Container;

/**
 * Minimal symbol definition for PHPStan only. Lumen cannot be installed as a
 * dev dependency because laravel/lumen-framework conflicts with the Laravel
 * versions tested in CI, yet the Lumen branch in UpsApiServiceProvider is a
 * deliberate support commitment.
 */
class Application extends Container
{
    public function configure(string $name): void
    {
    }
}
