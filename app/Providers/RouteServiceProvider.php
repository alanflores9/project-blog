<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        //$this->mapApiRoutes();

        $this->mapGuestRoutes();
        $this->mapDashboardRoutes();
        $this->mapAuthRoutes();
        //$this->mapGuestRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapGuestRoutes()
   {
       Route::group([
           'middleware' => 'web',
           'namespace' => $this->namespace,
           'prefix' => '/',
       ], function ($router) {
           require base_path('routes/guest/web.php');
       });

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
   protected function mapAuthRoutes()
   {
       Route::group([
           'middleware' => 'web',
           'namespace' => $this->namespace,
           'prefix' => '/',
       ], function ($router) {
           require base_path('routes/auth/web.php');
       });

    }
    protected function mapDashboardRoutes()
   {
       Route::group([
           'middleware' => ['web'/*, 'auth'*/],
           'namespace' => $this->namespace.'\Dashboard',
           'prefix' => 'dashboard',    //localhost/dashboard/rutas_dadas
       ], function ($router) {
           require base_path('routes/dashboard/web.php');
       });

    }
}
