<?php

namespace App\Providers;

use App\Models\Permission;
use Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use App\Observers\PermissionObserver;
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
        Permission::observe(PermissionObserver::class);
        Gate::before(function (User $user , $ability) {
            if ($user->hasPermissionTo($ability)) {
                return true;
        }});
    }
}
