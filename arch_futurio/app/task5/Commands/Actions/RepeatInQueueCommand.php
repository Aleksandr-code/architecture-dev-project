<?php


namespace App\task5\Commands\Actions;


use App\task5\Commands\ICommand;
use App\task5\Support\Queue;

class RepeatInQueueCommand implements ICommand
{
    public function __construct(private ICommand $command, private Queue $commandQueue){}

    public function execute(): void
    {
        $this->commandQueue->add($this->command);
    }
}