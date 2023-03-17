<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

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
        // Blade::if('super_admin', function () {   ///SuperAdmin
        //     return Auth::user()->role == 99;
        // });
        Blade::if('owner', function () {        ///Owner
            return Auth::user()->role == 98;
        });
        Blade::if('admin', function () {        ///Admin/Office
            return Auth::user()->role == 1;
        });
        Blade::if('operator', function () {     ///Operator/Editor
            return Auth::user()->role == 2;
        });
        Blade::if('line_manager', function () {     ///Line Manager
            return Auth::user()->role == 3;
        });
        Blade::if('viewer', function () {     ///Viewer
            return Auth::user()->role == 97;
        });
    }
}
