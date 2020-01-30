<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';

    protected $nameDashboardspace = 'App\Http\Controllers\Dashboard';

    protected $nameVendorspace = 'App\Http\Controllers\Vendor';

    public function boot()
    {


        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapDashboardRoutes();

        $this->mapVendorRoutes();

    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapDashboardRoutes()
    {
        Route::middleware('web')
             ->namespace($this->nameDashboardspace)
             ->group(base_path('routes/Dashboard/web.php'));
    }

    protected function mapVendorRoutes()
    {
        Route::middleware('web')
             ->namespace($this->nameVendorspace)
             ->group(base_path('routes/Dashboard/vendor.php'));
    }


    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
