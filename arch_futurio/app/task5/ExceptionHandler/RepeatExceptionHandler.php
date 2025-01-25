<?php


namespace App\task5\ExceptionHandler;

use App\task5\Commands\ExceptionCommands\RepeatCommand;
use App\task5\Commands\ICommand;
use App\task5\Support\Queue;

class RepeatExceptionHandler implements IExceptionHandler
{
    public function __construct(private Queue $commandQueue){}

    public function handle(ICommand $command, \Exception $exception): void
    {
        $logCommand = new RepeatCommand($command);

        $this->commandQueue->add($logCommand);
    }
}