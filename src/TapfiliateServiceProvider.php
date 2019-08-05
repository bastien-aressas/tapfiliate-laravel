<?php

namespace LegacyBeta\Tapfiliate\Laravel;

use Illuminate\Support\ServiceProvider;

class TapfiliateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Tapfiliate::class, function () {
            return new Tapfiliate();
        });
        $this->app->alias(Tapfiliate::class, 'tapfiliate');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/tapfiliate.php' => config_path('tapfiliate.php'),
            ], 'config');
        }
    }
}
