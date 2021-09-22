<?php

namespace Skfz\Quran\Providers;

use Skfz\Quran\Reader;
use Illuminate\Support\ServiceProvider;

class ReaderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('reader', function($app) {
            return new Reader();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        $this->publishes([
            __DIR__.'/../../database/seeders' => database_path('seeders')
        ], 'quran-seeder');
    }
}
