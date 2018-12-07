<?php

namespace Redfard\EmailBlacklist;

use Illuminate\Support\ServiceProvider;

class EmailBlackListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('emailBlacklist', function ($app) {
            return new EmailBlacklist();
        });
    }
}
