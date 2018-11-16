<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function () {
            if (\Auth::user()->roles->name == 'admin') {
                return true;
            } else {
                return false;
            }
        });

        Gate::define('editor', function () {
            if (\Auth::user()->roles->name == 'editor' || \Auth::user()->roles->name == 'admin') {
                return true;
            } else {
                return false;
            }
        });

        Gate::define('member', function () {
            if (\Auth::user()->roles->name == 'member' || \Auth::user()->roles->name == 'editor' || \Auth::user()->roles->name == 'admin') {
                return true;
            } else {
                return false;
            }
        });
    }


}
