<?php


namespace App\task4\ExceptionHandler\Strategy;

use App\task4\Commands\ExceptionCommands\RepeatCommand;
use App\task4\Commands\ICommand;
use App\task4\ExceptionHandler\LogExceptionHandler;
use App\task4\ExceptionHandler\RepeatExceptionHandler;

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