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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Paksa folder storage dan view ke /tmp (Wajib di Vercel)
        app()->useStoragePath('/tmp');
        config(['view.compiled' => '/tmp']);

        // Memastikan Laravel mencari aset di folder public yang benar
        $this->app->bind('path.public', function () {
            return base_path('public');
        });
    }
}