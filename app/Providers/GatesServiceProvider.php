<?php

namespace App\Providers;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class GatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('is_admin', function (User $user) {
            return in_array(RolesEnum::ADMIN->value, $user->getRoleNames()->toArray());
        });
    }
}
