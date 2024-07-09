<?php

namespace App\Providers;

use Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

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
        Gate::before(function (User $user , $ability) {
            if ($user->hasPermissionTo($ability)) {
                return true;
        }});
    }
}
