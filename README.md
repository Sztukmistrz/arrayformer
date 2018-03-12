# ArrayFormer

[![Build Status](https://travis-ci.org/sztukmistrz/arrayformer.svg?branch=master)](https://travis-ci.org/sztukmistrz/arrayformer)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sztukmistrz/arrayformer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sztukmistrz/arrayformer/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/sztukmistrz/arrayformer/badge.svg?branch=master)](https://coveralls.io/github/sztukmistrz/arrayformer?branch=master)

[![Packagist](https://img.shields.io/packagist/v/sztukmistrz/arrayformer.svg)](https://packagist.org/packages/sztukmistrz/arrayformer)
[![Packagist](https://poser.pugx.org/sztukmistrz/arrayformer/d/total.svg)](https://packagist.org/packages/sztukmistrz/arrayformer)
[![Packagist](https://img.shields.io/packagist/l/sztukmistrz/arrayformer.svg)](https://packagist.org/packages/sztukmistrz/arrayformer)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require sztukmistrz/arrayformer
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Sztukmistrz\Arrayformer\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Sztukmistrz\Arrayformer\Facades\Arrayformer::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Sztukmistrz\Arrayformer\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email admin2krzyztpfpultorak.pl
instead of using the issue tracker.

## Credits

- [Krzysztof Pułtorak](https://github.com/sztukmistrz/arrayformer)
- [All contributors](https://github.com/sztukmistrz/arrayformer/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
