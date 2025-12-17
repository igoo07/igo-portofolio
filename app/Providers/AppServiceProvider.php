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
        // Paksa HTTPS di production
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Paksa folder storage ke /tmp agar tidak error di Vercel
        app()->useStoragePath('/tmp');

        // Memastikan public path mengarah ke folder yang benar
        $this->app->bind('path.public', function () {
            return base_path('public');
        });
    }
}