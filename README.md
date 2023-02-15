# laravel filament admin barcoder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pathcoder4408/barcoder.svg?style=flat-square)](https://packagist.org/packages/pathcoder4408/barcoder)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pathcoder4408/barcoder/run-tests?label=tests)](https://github.com/pathcoder4408/barcoder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pathcoder4408/barcoder/Check%20&%20fix%20styling?label=code%20style)](https://github.com/pathcoder4408/barcoder/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pathcoder4408/barcoder.svg?style=flat-square)](https://packagist.org/packages/pathcoder4408/barcoder)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require pathcoder4408/barcoder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="barcoder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="barcoder-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="barcoder-views"
```

## Usage

```php
$barcoder = new Pathcoder4408\Barcoder();
echo $barcoder->echoPhrase('Hello, Pathcoder4408!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [pathcoder4408](https://github.com/pathcoder4408)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
