<?php


namespace App\task5\ExceptionHandler;

use App\task5\Commands\ExceptionCommands\LogCommand;
use App\task5\Commands\ICommand;
use App\task5\Support\Queue;

class LogExceptionHandler implements IExceptionHandler
{
    public function __construct(private Queue $commandQueue){}

    public function handle(ICommand $command, \Exception $exception): void
    {
        $logCommand = new LogCommand($command, $exception);

        $this->commandQueue->add($logCommand);
    }
}