<?php

namespace App\Providers;

use Filament\Facades\Filament;
use App\Filament\Pages\Auth\Register;
use App\Filament\Pages\Dashboard;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Filament::registerPages([
        //     'register' => Register::class,
        // ]);
        // Filament::serving(function () {
        //     Filament::registerWidgets([
        //         \App\Filament\Resources\OrderResource\Widgets\OrderStats::class,
        //     ]);
        // });
        // Filament::serving(function () {
        //     Filament::registerPages([
        //         Dashboard::class,
        //     ]);
        // });
    }
}
