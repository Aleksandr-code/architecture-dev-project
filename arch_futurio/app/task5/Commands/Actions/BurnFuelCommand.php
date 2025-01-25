<?php


namespace App\task5\Commands\Actions;

use App\task5\Adapters\IFuelable;
use App\task5\Commands\ICommand;

class BurnFuelCommand implements ICommand
{
    public function __construct(private IFuelable $fuelableObject){}

    public function execute(): void
    {
        $fuelLevel = $this->fuelableObject->getFuelLevel();
        $fuelBurnVelocity = $this->fuelableObject->getFuelBurnVelocity();

        $changedFuelLevel = $fuelLevel - $fuelBurnVelocity;

        $this->fuelableObject->setFuelLevel($changedFuelLevel);
    }
}