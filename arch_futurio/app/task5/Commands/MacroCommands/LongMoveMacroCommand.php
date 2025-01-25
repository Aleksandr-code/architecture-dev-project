<?php


namespace App\task5\Commands\MacroCommands;


use App\task5\Commands\Actions\MoveCommand;
use App\task5\Commands\Actions\RepeatInQueueCommand;
use App\task5\Support\Queue;

class LongMoveMacroCommand extends BaseMacroCommand
{
    public function __construct(private MoveCommand $moveCommand, private Queue $commandQueue)
    {
        parent::__construct([]);
        $this->commands[] = $this->moveCommand;
        $this->commands[] = new RepeatInQueueCommand($this, $this->commandQueue);
    }
}