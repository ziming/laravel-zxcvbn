<?php

namespace Ziming\LaravelZxcvbn;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ziming\LaravelZxcvbn\Commands\LaravelZxcvbnCommand;

class LaravelZxcvbnServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-zxcvbn')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-zxcvbn_table')
            ->hasCommand(LaravelZxcvbnCommand::class);
    }
}
