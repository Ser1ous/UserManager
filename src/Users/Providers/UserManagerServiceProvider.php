<?php namespace EvolutionCMS\Users;

use \EvolutionCMS\Users\UserManager;
use Illuminate\Support\ServiceProvider;

class UserManagerServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('UserManager', function ($app) {
            return new UserManager($app);
        });
    }
}
