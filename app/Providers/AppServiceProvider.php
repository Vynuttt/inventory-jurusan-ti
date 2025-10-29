<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Peminjaman;
use App\Observers\PeminjamanObserver;
use App\Models\BarangMasuk;
use App\Observers\BarangMasukObserver;

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
    Peminjaman::observe(PeminjamanObserver::class);
    BarangMasuk::observe(BarangMasukObserver::class);
}

}
