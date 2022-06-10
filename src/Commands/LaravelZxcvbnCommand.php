<?php

namespace Ziming\LaravelZxcvbn\Commands;

use Illuminate\Console\Command;

class LaravelZxcvbnCommand extends Command
{
    public $signature = 'laravel-zxcvbn';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
