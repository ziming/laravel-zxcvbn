# Changelog

All notable changes to `laravel-zxcvbn` will be documented in this file.

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
