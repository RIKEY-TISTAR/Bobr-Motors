<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Calling;
use App\Models\Footer;
use App\Models\Hero;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function($view) {
            $abouts = About::get();
            $view->with('abouts', $abouts);
        });

        View::composer('*', function($view) {
            $heroes = Hero::get();
            $view->with('heroes', $heroes);
        });

        View::composer('*', function($view) {
            $callings = Calling::get();
            $view->with('callings', $callings);
        });

        View::composer('*', function($view) {
            $footers = Footer::get();
            $view->with('footers', $footers);
        });
    }
}
