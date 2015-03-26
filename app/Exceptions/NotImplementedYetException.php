<?php namespace LaraTicket\Exceptions;

class NotImplementedYetException extends \Exception {

    /**
     * Construct a new instance of the exception
     *
     * @param string     $feature
     * @param \Exception $previous
     */
    public function __construct($feature, \Exception $previous = null)
    {
        parent::__construct("{$feature} has not been implemented yet!", 501, $previous);
    }

}
