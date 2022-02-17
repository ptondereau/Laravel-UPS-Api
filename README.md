Laravel UPS Api
=================

## For Laravel 6, 7, 8 and 9

<p align="center">
<a href="https://github.com/ptondereau/Laravel-UPS-Api/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/ptondereau/Laravel-UPS-Api/Tests?label=Tests&style=flat-square" alt="Build Status"/></a>
<a href="https://github.styleci.io/repos/54156171"><img src="https://github.styleci.io/repos/54156171/shield" alt="StyleCI Status"/></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square" alt="Software License"/></a>
<a href="https://packagist.org/packages/ptondereau/laravel-ups-api"><img src="https://img.shields.io/packagist/dt/ptondereau/laravel-ups-api?style=flat-square" alt="Packagist Downloads"/></a>
<a href="https://github.com/ptondereau/Laravel-UPS-Api/releases"><img src="https://img.shields.io/github/release/ptondereau/Laravel-UPS-Api?style=flat-square" alt="Latest Version"/></a>
</p>

Laravel UPS Api was created by, and is maintained by [Pierre Tondereau](https://github.com/ptondereau), and PHP UPS Api was created by, and is maintained by [Gabriel Bull](https://github.com/gabrielbull) at [PHP UPS API](https://github.com/gabrielbull/php-ups-api).

## Installation

To get the latest version of Laravel UPS Api, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require ptondereau/laravel-ups-api
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "ptondereau/laravel-ups-api": "^1.0"
    }
}
```

Once Laravel UPS Api is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'Ptondereau\LaravelUpsApi\UpsApiServiceProvider'`

You can register the all or some Ups facade in the `aliases` key of your `config/app.php` file if you like.

* `'UpsAddressValidator' => 'Ptondereau\LaravelUpsApi\Facades\UpsAddressValidator'`
* `'UpsLocator' => 'Ptondereau\LaravelUpsApi\Facades\UpsLocator'`
* `'UpsQuantumView' => 'Ptondereau\LaravelUpsApi\Facades\UpsQuantumView'`
* `'UpsRate' => 'Ptondereau\LaravelUpsApi\Facades\UpsRate'`
* `'UpsTimeInTransit' => 'Ptondereau\LaravelUpsApi\Facades\UpsTimeInTransit'`
* `'UpsTracking' => 'Ptondereau\LaravelUpsApi\Facades\UpsTracking'`
* `'UpsTradeability' => 'Ptondereau\LaravelUpsApi\Facades\UpsTradeability'`
* `'UpsShipping' => 'Ptondereau\LaravelUpsApi\Facades\UpsShipping'`
* `'UpsRateInTransit' => 'Ptondereau\LaravelUpsApi\Facades\UpsRateInTransit'`



## Configuration

Laravel UPS Api requires connection configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Ptondereau\LaravelUpsApi\UpsApiServiceProvider"
```

This will create a `config/ups.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

You also need to add env variables into your .env with your credentials:

```text
UPS_ACCESS_KEY=key
UPS_USER_ID=userId
UPS_PASSWORD=password
UPS_SANDBOX=true
```

## Usage

This package only inject and provide Facades for each class of [PHP UPS API](https://github.com/gabrielbull/php-ups-api).
You just have to read its documentation.


##### Further Information

There are other classes in this package that are not documented here. This is because they are not intended for public use and are used internally by this package.


## Security

If you discover a security vulnerability within this package, please send an e-mail to Pierre Tondereau at pierre.tondereau@gmail.com. All security vulnerabilities will be promptly addressed.


## License

Laravel Ups Api is licensed under [The MIT License (MIT)](LICENSE).
