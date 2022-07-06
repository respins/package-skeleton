<?php

namespace Respins\BasicSpins;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Respins\BasicSpins\Commands\BasicSpinsCommand;

class BasicSpinsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('basic-spins')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_basic-spins_table')
            ->hasCommand(BasicSpinsCommand::class);
    }
}
