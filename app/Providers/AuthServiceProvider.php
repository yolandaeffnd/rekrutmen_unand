<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("Mahasiswa", function (User $user) {
            if ($user->level == 'mahasiswa') {
                return true;
            }
            return false;
        });

        Gate::define("Dosen", function (User $user) {
            if ($user->level == 'dosen') {
                return true;
            }
            return false;
        });

        Gate::define("DosenLuar", function (User $user) {
            if ($user->level == 'dosenluar') {
                return true;
            }
            return false;
        });

        Gate::define("Tendik", function (User $user) {
            if ($user->level == 'tendik') {
                return true;
            }
            return false;
        });
        //
    }
}
