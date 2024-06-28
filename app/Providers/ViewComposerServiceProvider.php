<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //     View::composer('navbar', function ($view) {
        //     $view->with('navbar', About::all());
        // });
    }
}
