<?php

namespace App\task5\Commands\ExceptionCommands;

use App\task5\Commands\ICommand;

class RepeatTwiceCommand implements ICommand
{
    public function __construct(private ICommand $command){}

    public function execute(): void
    {
        $this->command->execute();
    }

}