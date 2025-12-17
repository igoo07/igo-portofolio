<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
{
{
    // Paksa HTTPS di production
    if (config('app.env') === 'production') {
        \URL::forceScheme('https');
    }

    // INI KUNCINYA: Memaksa Laravel menulis view ke folder /tmp
    $viewPath = '/tmp/storage/framework/views';
    if (!is_dir($viewPath)) {
        mkdir($viewPath, 0777, true);
    }
    config(['view.compiled' => $viewPath]);
}
}
    }
}
