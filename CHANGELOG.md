# Changelog

All notable changes to `laravel-zxcvbn` will be documented in this file.

## Support Laravel 13 - 2026-03-17

### What's Changed

* Bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/ziming/laravel-zxcvbn/pull/23
* Bump actions/checkout from 5 to 6 by @dependabot[bot] in https://github.com/ziming/laravel-zxcvbn/pull/24
* Bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/ziming/laravel-zxcvbn/pull/25
* Bump ramsey/composer-install from 3 to 4 by @dependabot[bot] in https://github.com/ziming/laravel-zxcvbn/pull/26
* Add Laravel 13 support by @Claude in https://github.com/ziming/laravel-zxcvbn/pull/27

### New Contributors

* @Claude made their first contribution in https://github.com/ziming/laravel-zxcvbn/pull/27

**Full Changelog**: https://github.com/ziming/laravel-zxcvbn/compare/2.3.6...2.4.6

## Laravel 13 Support - 2026-03-17

### What's Changed

* Add support for Laravel 13
* Add support for PHP 8.3 and 8.4
* Update dev dependencies to support Laravel 13 (Orchestra Testbench 11, Pest 5, Collision 9)
* Add Laravel 13 to CI test matrix

## Fix Tests - 2025-10-04

### What's Changed

* fix phpstan running by @ziming in https://github.com/ziming/laravel-zxcvbn/pull/20
* Fix Tests unable to run by @ziming in https://github.com/ziming/laravel-zxcvbn/pull/21
* fix phpstan env outside config error by @ziming in https://github.com/ziming/laravel-zxcvbn/pull/22

### New Contributors

* @ziming made their first contribution in https://github.com/ziming/laravel-zxcvbn/pull/20

**Full Changelog**: https://github.com/ziming/laravel-zxcvbn/compare/2.3.5...2.3.6

## Remove some strict types temporarily - 2025-03-17

Remove some strict types temporarily as it causes some issues. More details later

## Add indonesia translation - 2024-08-09

### What's Changed

* Bump stefanzweifel/git-auto-commit-action from 4 to 5 by @dependabot in https://github.com/ziming/laravel-zxcvbn/pull/11
* id translation by @stephanus-tantiono in https://github.com/ziming/laravel-zxcvbn/pull/13

**Full Changelog**: https://github.com/ziming/laravel-zxcvbn/compare/2.1.1...2.2

## Fix Laravel 10 Support, Drop Laravel 9 - 2023-02-14

- Fix Laravel 10 Support
- Drop Laravel 9
- Use the new Str::password() function in tests :)

## Laravel 10 Support, allow overriding config file min score - 2023-02-11

- Laravel 10 support
- Allow overriding config file min score
- Add initial tests

## Switch to use InvokableRule - 2022-11-15

- Switch to use InvokableRule
- Minimum laravel bumped to 9.18

## Set default min score back to 3 - 2022-11-10

Changed my mind about starting at 4.
