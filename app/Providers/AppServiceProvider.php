<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PhoneServiceInterface;
use App\Services\PhoneService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PhoneServiceInterface::class, PhoneService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
