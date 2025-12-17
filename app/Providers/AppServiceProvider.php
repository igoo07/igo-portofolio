<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Gunakan HTTPS di Vercel
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // PENTING: Paksa folder storage dan view ke folder sementara Vercel
        $tmpPath = '/tmp';
        app()->useStoragePath($tmpPath);
        config(['view.compiled' => $tmpPath]);

        // Memastikan Laravel tahu letak folder public di Vercel
        $this->app->bind('path.public', function () {
            return base_path('public');
        });
    }
}