<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        view()->composer('front.frontTheme._headerNav',function ($view)
        {
            $view->with('categories',Category::orderBy('name')->get());
        });
        view()->composer('front/blog/_right-featured-post',function($view)
        {
           $view->with('featured_post',Post::with('category')->where('is_featured',1)->where('status','published')->orderBy('id','DESc')->limit(3)->latest()->get());
        });

    }
}
