<?php

namespace App\task4\Commands\ExceptionCommands;

use App\task4\Commands\ICommand;

class RepeatCommand implements ICommand
{
    public function __construct(private ICommand $command){}

    public function execute(): void
    {
        $this->command->execute();
    }

}