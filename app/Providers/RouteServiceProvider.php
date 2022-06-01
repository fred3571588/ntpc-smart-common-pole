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
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
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
            Route::prefix('api')->middleware('auth:sanctum', 'api')->group(function () use ($RouteServiceProvider) {
                $RouteServiceProvider->boot_api();
            });
        });
    }

    /**
     * boot_def
     * 預設的API-不需通過登入驗證的API
     */
    public function boot_def()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * boot_api
     * 為規劃的API表-需登入才能使用
     */
    public function boot_api()
    {
        $names = [
            //登入API
            'A00_Login',
            'B00_System_manage',
            'B01_Announcement_manage'
        ];
        foreach ($names as $name) {
            if (substr($name, 0, 3) === 'B01') {
                Route::prefix(substr($name, 0, 3))
                    ->namespace($this->namespace . '\\' . $name)
                    ->group(base_path(join('/', ['routes', 'api', $name . '_Api.php'])));
            } else {
                Route::prefix(substr($name, 0, 3))
                    ->middleware('throttle:api')
                    ->namespace($this->namespace . '\\' . $name)
                    ->group(base_path(join('/', ['routes', 'api', $name . '_Api.php'])));
            }
        }
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
