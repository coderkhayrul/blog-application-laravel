<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.nav'], function ($view){
            $view->with('blogs', Blog::where('status', 1)->latest()->get());
        });
        View::composer(['layouts.nav'], function ($view){
            $view->with('category', Category::all());
        });
    }
}
