<?php


namespace App\task5\ExceptionHandler;

use App\task5\Commands\ICommand;

interface IExceptionHandler
{
    public function handle(ICommand $command, \Exception $exception):void;
}