<?php

namespace App\Providers;

use App\Permission;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param Gate $gate
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        if (Schema::hasTable('permissions')) {
            foreach ($this->getPermissions() as $permission) {
                $gate->define($permission->name, function (User $user) {
                    return $user->hasRole($permission->roles);
                });
            }
        }

    }

    public function getPermissions() {
            return Permission::with('roles')->get();
    }


}
