<?php namespace LaraTicket\Services;

use LaraTicket\Contracts\Permissions\HasRoles;
use LaraTicket\Contracts\Permissions\HasPermissions;
use LaraTicket\Contracts\Permissions\PermissionProvider;
use LaraTicket\Exceptions\NotImplementedYetException;

class ChecksPermissions implements PermissionProvider {

    public function can($permissible, $permission)
    {
        if ( ! $permissible) return false;
        if ( ! in_array(HasPermissions::class, class_implements($permissible))
            && ! in_array(HasRoles::class, class_implements($permissible))
        ) return false;
        dd($permissible->getPermissions());
    }


    /**
     * Check if the current user has a permission
     *
     * @param $permission
     * @return bool
     */
    public function check($permission)
    {
        return $this->can(\Auth::user(), $permission);
    }
}
