<?php namespace LaraTicket\Permissions;

use LaraTicket\Exceptions\NotCompatibleClassException;

trait HasRoles {

    /**
     * Get the roles of this object.
     *
     * @return mixed | Role | Model
     * @throws NotCompatibleClassException
     */
    public function getRoles()
    {
        if ( ! method_exists($this, 'roles') )
        {
            throw new NotCompatibleClassException('roles');
        }

        return $this->roles()->get();
    }

}
