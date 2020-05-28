<?php

namespace Ptondereau\LaravelUpsApi;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
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
 * This is the Ups Api service provider class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsApiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->setupConfig();
    }

    public function register(): void
    {
        $this->registerAddressValidation();
        $this->registerSimpleAddressValidation();
        $this->registerQuantumView();
        $this->registerTracking();
        $this->registerRate();
        $this->registerTimeInTransit();
        $this->registerLocator();
        $this->registerTradeability();
        $this->registerShipping();
        $this->registerRateTimeInTransit();
    }

    protected function setupConfig(): void
    {
        $source = realpath(__DIR__.'/../config/ups.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('ups.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('ups');
        }
        $this->mergeConfigFrom($source, 'ups');
    }

    protected function registerAddressValidation(): void
    {
        $this->app->singleton('ups.address-validation', function (Container $app) {
            $config = $app->config->get('ups');

            return new AddressValidation(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerSimpleAddressValidation(): void
    {
        $this->app->singleton('ups.simple-address-validation', function (Container $app) {
            $config = $app->config->get('ups');

            return new SimpleAddressValidation(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerQuantumView(): void
    {
        $this->app->singleton('ups.quantum-view', function (Container $app) {
            $config = $app->config->get('ups');

            return new QuantumView(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerTracking(): void
    {
        $this->app->singleton('ups.tracking', function (Container $app) {
            $config = $app->config->get('ups');

            return new Tracking(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerRate(): void
    {
        $this->app->singleton('ups.rate', function (Container $app) {
            $config = $app->config->get('ups');

            return new Rate(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                $app->make('log')
            );
        });
    }

    protected function registerTimeInTransit(): void
    {
        $this->app->singleton('ups.time-in-transit', function (Container $app) {
            $config = $app->config->get('ups');

            return new TimeInTransit(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerLocator(): void
    {
        $this->app->singleton('ups.locator', function (Container $app) {
            $config = $app->config->get('ups');

            return new Locator(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerTradeability(): void
    {
        $this->app->singleton('ups.tradeability', function (Container $app) {
            $config = $app->config->get('ups');

            return new Tradeability(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerShipping(): void
    {
        $this->app->singleton('ups.shipping', function (Container $app) {
            $config = $app->config->get('ups');

            return new Shipping(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                null,
                $app->make('log')
            );
        });
    }

    protected function registerRateTimeInTransit(): void
    {
        $this->app->singleton('ups.ratetimeintransit', function (Container $app) {
            $config = $app->config->get('ups');

            return new RateTimeInTransit(
                $config['access_key'],
                $config['user_id'],
                $config['password'],
                $config['sandbox'],
                $app->make('log')
            );
        });
    }

    public function provides(): array
    {
        return [
            'ups.address-validation',
            'ups.simple-address-validation',
            'ups.quantum-view',
            'ups.tracking',
            'ups.rate',
            'ups.time-in-transit',
            'ups.locator',
            'ups.tradeability',
            'ups.shipping',
            'ups.ratetimeintransit',
        ];
    }
}
