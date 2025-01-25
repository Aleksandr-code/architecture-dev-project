<?php


namespace App\task5\Commands\MacroCommands;


use App\task5\Commands\Actions\BurnFuelCommand;
use App\task5\Commands\Actions\CheckFuelCommand;
use App\task5\Commands\Actions\MoveCommand;

class MoveWithFuelMacroCommand extends BaseMacroCommand
{
    public function __construct(CheckFuelCommand $checkFuelCommand, MoveCommand $moveCommand, BurnFuelCommand $burnFuelCommand)
    {
        $sequenceCommands = [$checkFuelCommand, $moveCommand, $burnFuelCommand];
        parent::__construct($sequenceCommands);
    }
}