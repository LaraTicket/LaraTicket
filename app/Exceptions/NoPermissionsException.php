<?php

namespace LaraTicket\Exceptions;

class NoPermissionsException extends \Exception
{

    /**
     * Construct a new instance of the exception
     *
     * @param string     $permission
     * @param \Exception $previous
     */
    public function __construct($permission, \Exception $previous = null)
    {
        parent::__construct("You don't have {$permission} permissions", 403, $previous);
    }
}
