<?php


namespace App\task4\ExceptionHandler;

use App\task4\Commands\ExceptionCommands\RepeatCommand;
use App\task4\Commands\ICommand;
use App\task4\Support\Queue;

class RepeatExceptionHandler implements IExceptionHandler
{
    public function __construct(private Queue $commandQueue){}

    public function handle(ICommand $command, \Exception $exception): void
    {
        $logCommand = new RepeatCommand($command);

        $this->commandQueue->add($logCommand);
    }
}