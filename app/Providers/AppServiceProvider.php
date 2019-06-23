<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Products;
use App\Modules\Observers\ProductObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Products::observe(ProductObserver::class);
    }
}
