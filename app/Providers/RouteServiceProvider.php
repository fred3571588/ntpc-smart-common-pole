<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        // 類庫重新命名
        $RouteServiceProvider = $this;
        // 載入router
        $this->routes(function () use ($RouteServiceProvider) {
            // 預設token
            $RouteServiceProvider->boot_def();
            // 自訂route-每次呼叫都需要檢查token
            Route::prefix('api')->group(function () use ($RouteServiceProvider) {
                $RouteServiceProvider->boot_api();
            });
        });
    }

    public function boot_def()
    {
        Route::prefix('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    public function boot_api()
    {
        $names = [
            //登入API
            'A00_Login',
            'B01_Announcement_manage'
        ];
        foreach ($names as $name) {
            if (substr($name, 0, 3) === '999') {
                Route::prefix(substr($name, 0, 3))
                    ->namespace($this->namespace . '\\' . $name)
                    ->group(base_path(join('/', ['routes', 'api', $name . '_Api.php'])));
            } else {
                Route::prefix(substr($name, 0, 3))
                    ->namespace($this->namespace . '\\' . $name)
                    ->group(base_path(join('/', ['routes', 'api', $name . '_Api.php'])));
            }
        }
    }

        // $this->configureRateLimiting();

        // $this->routes(function () {
        //     Route::middleware('api')
        //         ->prefix('api')
        //         ->group(base_path('routes/api.php'));

        //     Route::middleware('web')
        //         ->group(base_path('routes/web.php'));
        // });


    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
