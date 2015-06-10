<?php

namespace LaraTicket\Permissions;

use Illuminate\Support\Collection;
use LaraTicket\Contracts\Permissions\HasRoles as HasRolesContract;
use LaraTicket\Exceptions\NotCompatibleClassException;

trait HasPermissions
{

    /**
     * Get The permissions of this class.
     *
     * @return mixed
     * @throws NotCompatibleClassException
     */
    public function getPermissions()
    {
        if (method_exists($this, 'permissions')) {
            return $this->permissions()->get();
        }

        if ( ! in_array(HasRolesContract::class, class_implements($this))) {
            throw new NotCompatibleClassException('getRoles');
        }

        return $this->mergePermissionsFromRoles();
    }

    /**
     * Merge all permissions from roles
     *
     * @return Collection
     */
    private function mergePermissionsFromRoles()
    {
        $perms = new Collection();

        foreach ($this->getRoles() as $role) {
            $perms[] = $role->getPermissions()->all();
        }
        $perms = $perms->flatten()->keyBy('node');

        return $perms;
    }
}
