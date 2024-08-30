<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            if (auth('customer')->check()) {
                $user = auth('customer')->user();
                $totalQuantity = $user->cartItems->sum('quantity');
                $view->with('totalQuantity', $totalQuantity);
            }
        });
    }
}
