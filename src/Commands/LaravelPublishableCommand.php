<?php

namespace Telkins\LaravelPublishable\Commands;

use Illuminate\Console\Command;

class LaravelPublishableCommand extends Command
{
    public $signature = 'laravel-publishable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
