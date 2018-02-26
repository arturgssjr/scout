<?php

namespace scout\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\scout\Interfaces\UserRepository::class, \scout\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
