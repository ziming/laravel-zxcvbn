# Zxcvbn Password validation rule for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ziming/laravel-zxcvbn.svg?style=flat-square)](https://packagist.org/packages/ziming/laravel-zxcvbn)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ziming/laravel-zxcvbn/run-tests?label=tests)](https://github.com/ziming/laravel-zxcvbn/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ziming/laravel-zxcvbn/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ziming/laravel-zxcvbn/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ziming/laravel-zxcvbn.svg?style=flat-square)](https://packagist.org/packages/ziming/laravel-zxcvbn)

Laravel Zxcvbn Password Validation Rule. Nothing more, nothing less.

For an introdution to Zxcvbn, see the following link

https://dropbox.tech/security/zxcvbn-realistic-password-strength-estimation

## Installation

You can install the package via composer:

```bash
composer require ziming/laravel-zxcvbn
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="zxcvbn-config"
```

This is the contents of the published config file. The default min score is set to 4.

```php
<?php

return [
    'min_score' => env('ZXCVBN_MIN_SCORE', 4),
];
```

[bjeavons/zxcvbn-php](https://github.com/bjeavons/zxcvbn-php) provides a good overview on the zxcvbn score.

    Scores are integers from 0 to 4:

    - 0 means the password is extremely guessable (within 10^3 guesses), dictionary words like 'password' or 'mother' score a 0
    - 1 is still very guessable (guesses < 10^6), an extra character on a dictionary word can score a 1
    - 2 is somewhat guessable (guesses < 10^8), provides some protection from unthrottled online attacks
    - 3 is safely unguessable (guesses < 10^10), offers moderate protection from offline slow-hash scenario
    - 4 is very unguessable (guesses >= 10^10) and provides strong protection from offline slow-hash scenario

## Usage

```php
// In your validation rules
use Illuminate\Validation\Rules\Password;
use Ziming\LaravelZxcvbn\Rules\ZxcvbnRule;

[
    'name' => ['required']
    'email' => ['required', 'email'],
    'password' => [
        'required', 
        'confirmed', 
        'min:8',
        new ZxcvbnRule([
            request('email'),
            request('name'),
        ]),
    ],
]
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

- [ziming](https://github.com/ziming)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
