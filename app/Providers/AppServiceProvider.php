<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('components.flag', 'flag');
        Blade::component('components.flag-brazil', 'flag-brazil');
        Blade::component('components.flag-spain', 'flag-spain');
        Blade::component('components.flag-u-s-a', 'flag-usa');
        Blade::component('components.flag-china', 'flag-china');
    }
}
