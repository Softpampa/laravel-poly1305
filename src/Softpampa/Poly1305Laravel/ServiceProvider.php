<?php

namespace Softpampa\Poly1305Laravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->package('softpampa/poly1305-laravel');
    }

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        $this->app['poly1305'] = $this->app->share(function ($app) {
            return new Poly1305\Poly1305;
        });

        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Poly1305', 'Poly1305\Poly1305');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
