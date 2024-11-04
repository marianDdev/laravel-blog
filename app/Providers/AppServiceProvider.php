<?php

namespace App\Providers;

use App\Services\File\FileService;
use App\Services\File\FileServiceInterface;
use App\Services\Seo\SeoService;
use App\Services\Seo\SeoServiceInterface;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FileServiceInterface::class, FileService::class);
        $this->app->bind(SeoServiceInterface::class, SeoService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        URL::forceScheme('https');
    }
}
