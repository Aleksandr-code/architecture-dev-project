<?php

namespace App\task5\Commands\MacroCommands;

use App\task5\Commands\ICommand;
use App\task5\Exceptions\CommandException;

class BaseMacroCommand implements ICommand
{
    public function __construct(protected array $commands){}

    public function execute(): void
    {
        try{
            foreach ($this->commands as $command){
                $command->execute();
            }
        } catch (\Exception $ex){
            throw new CommandException($ex);
        }
    }
}