<?php

declare(strict_types=1);

namespace Ziming\LaravelZxcvbn\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Ziming\LaravelZxcvbn\LaravelZxcvbnServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelZxcvbnServiceProvider::class,
        ];
    }
}
