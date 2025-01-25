<?php


namespace App\task5\Commands\Actions;

use App\task5\Adapters\IFuelable;
use App\task5\Exceptions\CommandException;

class CheckFuelCommand implements \App\task5\Commands\ICommand
{
    public function __construct(private IFuelable $fuelableObject){}

    public function execute(): void
    {
        $fuelLevel = $this->fuelableObject->getFuelLevel();

        if ($fuelLevel < 0){
            throw new CommandException('');
        }
    }
}