<?php namespace LaraTicket\Permissions;

use LaraTicket\Exceptions\NotCompatibleClassException;

trait HasPermissions {

    /**
     * Get The permissions of this class.
     *
     * @return mixed
     * @throws NotCompatibleClassException
     */
    public function getPermissions()
    {
        if ( ! method_exists($this, 'permissions'))
        {
            throw new NotCompatibleClassException('permissions');
        }

        return $this->permissions()->get()->toArray();
    }
}
