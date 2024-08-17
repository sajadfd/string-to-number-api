<?php

namespace App\Providers;

use App\Services\StringToNumberService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(StringToNumberService::class, function ($app) {
            return new StringToNumberService();
        });
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
