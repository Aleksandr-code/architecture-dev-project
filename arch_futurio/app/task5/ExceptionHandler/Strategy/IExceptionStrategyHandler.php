<?php


namespace App\task5\ExceptionHandler\Strategy;

use App\task5\Commands\ICommand;

interface IExceptionStrategyHandler
{
    public function getStrategyHandler(ICommand $command, \Exception $exception): string;
}