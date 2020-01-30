<?php

namespace App\Providers;

use App\Wcategory;
use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->share('wcategories', Wcategory::all());

        view()->share('categories', Category::all());

    }
}
