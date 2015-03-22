<?php namespace LaraTicket\Contracts\Permissions;

interface PermissionProvider {

    public function can($user, $permission);


    public function check($permission);

}
