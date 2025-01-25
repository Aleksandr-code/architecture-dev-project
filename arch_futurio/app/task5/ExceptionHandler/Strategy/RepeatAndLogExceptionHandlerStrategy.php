<?php


namespace App\task5\ExceptionHandler\Strategy;

use App\task5\Commands\ExceptionCommands\RepeatCommand;
use App\task5\Commands\ICommand;
use App\task5\ExceptionHandler\LogExceptionHandler;
use App\task5\ExceptionHandler\RepeatExceptionHandler;

class RepeatAndLogExceptionHandlerStrategy implements IExceptionStrategyHandler
{

    public function getStrategyHandler(ICommand $command, \Exception $exception): string
    {
        if ($command instanceof RepeatCommand) {
            return LogExceptionHandler::class;
        } else {
            return RepeatExceptionHandler::class;
        }
    }
}