<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravelrus\LocalizedCarbon\LocalizedCarbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $locale = 'ru';
        $locale_CODE = 'ru_RU';

        setlocale(LC_ALL, $locale . '.utf-8', $locale_CODE . '.utf-8', $locale, $locale_CODE);
        app()->setLocale(config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
