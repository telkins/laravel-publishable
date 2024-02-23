<?php

namespace Telkins\LaravelPublishable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Telkins\LaravelPublishable\Commands\LaravelPublishableCommand;

class LaravelPublishableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-publishable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-publishable_table')
            ->hasCommand(LaravelPublishableCommand::class);
    }
}
