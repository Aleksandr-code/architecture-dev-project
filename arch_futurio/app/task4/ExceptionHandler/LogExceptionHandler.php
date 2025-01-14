<?php


namespace App\task4\ExceptionHandler;


use App\task4\Commands\ExceptionCommands\LogCommand;
use App\task4\Commands\ICommand;
use App\task4\Support\Queue;

class LogExceptionHandler implements IExceptionHandler
{
    public function __construct(private Queue $commandQueue){}

    public function handle(ICommand $command, \Exception $exception): void
    {
        $logCommand = new LogCommand($command, $exception);

        $this->commandQueue->add($logCommand);
    }
}