<?php

namespace Amaz\LaravelSlugGenarator;

use Amaz\LaravelSlugGenarator\Facades\UniqueSlug;
use Illuminate\Support\ServiceProvider;



class SlugServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-slug-generator', function ($app) {
            return new \Amaz\LaravelSlugGenarator\UniqueSlug();
        });
    }
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
