<?php

namespace App\Providers;

use App\ProductType ;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        $loai_sp = ProductType::all();
        View::share('loai_sp', $loai_sp);
    }
}
