<?php


namespace App\task4\ExceptionHandler\Strategy;

use App\task4\Commands\ICommand;

interface IExceptionStrategyHandler
{
    public function getStrategyHandler(ICommand $command, \Exception $exception): string;
}