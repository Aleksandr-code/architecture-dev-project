<?php

namespace App\task5\Exceptions;

use Exception;
use Throwable;

class CommandException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null) {

        parent::__construct($message, $code, $previous);

    }
}