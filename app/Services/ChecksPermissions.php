<?php namespace LaraTicket\Services;

use LaraTicket\Contracts\Permissions\PermissionProvider;
use LaraTicket\Exceptions\NotImplementedYetException;
use LaraTicket\User;

class ChecksPermissions implements PermissionProvider {

    public function can($user, $permission)
    {
        throw new NotImplementedYetException;
    }


    /**
     * Check if the current user has a permission
     * 
     * @param $permission
     */
    public function check($permission)
    {
        return $this->can(\Auth::user(), $permission);
    }
}
