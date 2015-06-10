<?php

namespace LaraTicket\Services;

use Illuminate\Auth\AuthManager;
use LaraTicket\Contracts\Permissions\HasPermissions as HasPermissionsContract;
use LaraTicket\Contracts\Permissions\PermissionProvider;
use LaraTicket\Exceptions\NoPermissionsException;

class ChecksPermissions implements PermissionProvider
{

    /**
     * @var AuthManager
     */
    private $auth;

    /**
     * Construct a new instance
     *
     * @param AuthManager $auth
     */
    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Check if the give user has the given permission
     *
     * @param $permissible
     * @param $permission
     *
     * @return bool
     */
    public function can($permissible, $permission)
    {
        if ( ! $permissible) {
            return false;
        }
        if ( ! in_array(HasPermissionsContract::class, class_implements($permissible))) {
            return false;
        }

        return $permissible->getPermissions()->has($permission);
    }

    /**
     * Check if the current user has a permission
     *
     * @param $permission
     *
     * @throws NoPermissionsException
     */
    public function check($permission)
    {
        if ( ! $this->can($this->auth->user(), $permission)) {
            throw new NoPermissionsException($permission);
        }
    }
}
