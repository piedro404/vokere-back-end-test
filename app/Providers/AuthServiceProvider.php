<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user) {
            return $user->permissions->contains('name', 'admin');
        });

        Gate::define('manager', function (User $user) {
            return $user->permissions->contains('name', 'manager');
        });

        Gate::define('client', function (User $user) {
            return $user->permissions->contains('name', 'client');
        });

    }
}
