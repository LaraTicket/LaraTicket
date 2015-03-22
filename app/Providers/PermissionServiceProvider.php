<?php namespace LaraTicket\Providers;

use Illuminate\Support\ServiceProvider;
use LaraTicket\Contracts\Permissions\PermissionProvider;
use \LaraTicket\Services\ChecksPermissions;

class PermissionServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PermissionProvider::class, ChecksPermissions::class);
    }

}
