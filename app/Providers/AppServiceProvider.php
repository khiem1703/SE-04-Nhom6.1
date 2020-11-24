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
        view()->composer('header',function($view){
            $loai_sp = ProductType::all();

            $view->with('loai_sp',$loai_sp);

        });
        
       // View::share('loai_sp', $loai_sp);
    }
}
