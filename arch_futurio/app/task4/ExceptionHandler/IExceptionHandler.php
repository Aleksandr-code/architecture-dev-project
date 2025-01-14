<?php


namespace App\task4\ExceptionHandler;


use App\task4\Commands\ICommand;

interface IExceptionHandler
{
    public function handle(ICommand $command, \Exception $exception):void;
}