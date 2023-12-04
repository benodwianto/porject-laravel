<?php

namespace App\Providers;

use App\Models\Kategori;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        $kategori_list = Kategori::all();
        view()->share('kategori_list', $kategori_list);
    }
}
