<?php namespace LaraTicket;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

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
