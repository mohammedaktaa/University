<?php

namespace App\Providers;

use App\Http\ViewComposers\AdminHeaderComposer;
use App\Http\ViewComposers\GlobalComposer;
use App\Http\ViewComposers\RegisterComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            '*', GlobalComposer::class
        );
        view()->composer(
            '*', RegisterComposer::class
        );
        view()->composer(
            '*', AdminHeaderComposer::class
        );
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
