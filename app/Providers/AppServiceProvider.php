<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\HomeContent;
use App\Models\Slider;
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
    
        view()->composer('frontend.partial.footer', function ($view) {
            $view->with('about', HomeContent::first());
        });
        
        view()->composer('frontend.layouts.layout', function ($view) {
            $view->with('contact', Contact::get());
        });

        view()->composer('frontend.layouts.layout', function ($view) {
            $view->with('about', HomeContent::first());
        });
        
        view()->composer('frontend.partial.footer', function ($view) {
            $view->with('banner', Banner::where('page', 'footer')->first());
        });


    }
}
