<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', 'App\Http\Composers\LanguageComposer');//языквой пакет
        view()->composer('*', 'App\Http\Composers\SLanguageComposer');//языковой пакет из сессии
        view()->composer('*', 'App\Http\Composers\MainTemplateComposer');//имя основного шаблон

        view()->composer('templates.left_side', 'App\Http\Composers\NavigationComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
