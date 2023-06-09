<?php

namespace Glory\NtemoLabs;

use Illuminate\Support\ServiceProvider;

class GloryLabs extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([

            __DIR__ . '/app' => base_path('app'),
            __DIR__ . '/config' => base_path('config'),
            __DIR__ . '/database' => base_path('database'),
            __DIR__ . '/public' => base_path('public'),
            __DIR__ . '/resources' => base_path('resources'),
            __DIR__ . '/routes' => base_path('routes'),
            __DIR__ . '.env' => base_path('.env'),

        ], 'ntemolabs');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
