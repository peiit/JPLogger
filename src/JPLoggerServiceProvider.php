<?php

namespace Peiit\JPLogger;

use Illuminate\Support\ServiceProvider;

class JPLoggerServiceProvider extends ServiceProvider
{
    
    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('JPLogger', function ($app) {
            return new JPLogger();
        });
    }
}
