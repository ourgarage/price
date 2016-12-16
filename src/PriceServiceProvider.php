<?php

namespace Ourgarage\Price;

use Illuminate\Support\ServiceProvider;

class PriceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/routes/web.php';

        $this->loadViewsFrom(__DIR__.'/resources/views', 'price');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'price');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('packages/price'),
        ], 'price');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ourgarage\Blog\Http\Controllers\Admin\PriceController');

        $this->mergeConfigFrom(__DIR__.'/config/price.php', 'packages');
    }
}
