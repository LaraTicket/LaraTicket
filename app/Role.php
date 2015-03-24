<?php namespace LaraTicket;

use Illuminate\Database\Eloquent\Model;
use LaraTicket\Contracts\Permissions\HasPermissions as HasPermissionsContract;
use LaraTicket\Permissions\HasPermissions;

class Role extends Model implements HasPermissionsContract {

    use HasPermissions;

    /**
     * Permissions that belong to this role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

}
