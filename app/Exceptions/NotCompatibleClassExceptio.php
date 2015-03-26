<?php namespace LaraTicket\Exceptions;

class NotCompatibleClassException extends \Exception {

    /**
     * Construct a new instance of the exception
     *
     * @param string     $method
     * @param \Exception $previous
     */
    public function __construct($method, \Exception $previous = null)
    {
        parent::__construct("Class must implement {$method} method!", 0, $previous);
    }
}
