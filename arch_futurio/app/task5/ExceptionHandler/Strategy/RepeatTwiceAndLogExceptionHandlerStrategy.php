<?php


namespace App\task5\ExceptionHandler\Strategy;

use App\task5\Commands\ExceptionCommands\RepeatTwiceCommand;
use App\task5\Commands\ICommand;
use App\task5\ExceptionHandler\LogExceptionHandler;
use App\task5\ExceptionHandler\RepeatExceptionHandler;

class RepeatTwiceAndLogExceptionHandlerStrategy implements IExceptionStrategyHandler
{

    public function getStrategyHandler(ICommand $command, \Exception $exception): string
    {
        if ($command instanceof RepeatTwiceCommand) {
            return LogExceptionHandler::class;
        } else {
            return RepeatExceptionHandler::class;
        }
    }
}