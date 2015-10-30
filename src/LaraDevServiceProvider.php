<?php

namespace Philsquare\LaraDev;

use Illuminate\Support\ServiceProvider;

class LaraDevServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            'Philsquare\LaraDev\Commands\Uikit'
        ]);
    }
}
