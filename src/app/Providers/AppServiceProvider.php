<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('ifUsa_ldap', function () {
            return "<?php if (config('kinsari.utilizaldap')===true): ?>";
        });
        Blade::directive('ifNaoUsa_ldap', function () {
            return "<?php if (config('kinsari.utilizaldap')===false): ?>";
        });
    }
}
