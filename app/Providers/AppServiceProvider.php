<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Colors\Color;

class AppServiceProvider extends ServiceProvider
{
    public function panel(Panel $panel): void
    {
        $panel->colors()->addMany([
            Color::make('custom-blue', '#1E40AF'),
            Color::make('custom-green', '#10B981'),
            Color::make('custom-red', '#EF4444'),
        ]);
    }
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
        //
    }
}
