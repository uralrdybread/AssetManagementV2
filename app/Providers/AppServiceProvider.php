<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // navlink icons
        Blade::component('components.icons.dashboard-icon', 'dashboard-icon');
        Blade::component('components.icons.asset-icon', 'asset-icon');
        Blade::component('components.icons.employee-icon', 'employee-icon');
        Blade::component('components.icons.maintenance-icon', 'maintenance-icon');
        Blade::component('components.icons.report-icon', 'report-icon');

        Blade::component('components.buttons.button-component', 'button-component');

        Blade::component('components.forminputs.formField', 'formField');
        Blade::component('components.forminputs.formHistory', 'formHistory');
    }
}
