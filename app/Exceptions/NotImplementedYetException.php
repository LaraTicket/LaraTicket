<?php namespace LaraTicket\Exceptions;

class NotImplementedYetException extends \Exception {

    public function __construct($feature = "", $code = 501, \Exception $previous = null)
    {
        parent::__construct("{$feature} has not been implemented yet!", $code, $previous);
    }

}
