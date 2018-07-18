<?php

namespace THAILV\SimplePackage;

use Illuminate\Support\ServiceProvider;

class SimplePackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'SimplePackage');
        if (! $this->app->routesAreCached()) {
        require __DIR__.'/routes.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
