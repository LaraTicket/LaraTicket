<?php namespace LaraTicket\Exceptions;

class NotCompatibleClassException extends \Exception {

    public function __construct($method)
    {
        parent::__construct("Class must implement {$method} method!");
    }
}
