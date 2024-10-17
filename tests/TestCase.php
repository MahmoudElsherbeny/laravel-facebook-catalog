<?php

namespace MahmoudElsherbeny\LaravelFacebookCatalog\Tests;

use MahmoudElsherbeny\LaravelFacebookCatalog\LaravelFacebookCatalogServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MahmoudElsherbeny\\LaravelFacebookCatalog\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelFacebookCatalogServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-facebook-catalog_table.php.stub';
        $migration->up();
        */
    }
}
