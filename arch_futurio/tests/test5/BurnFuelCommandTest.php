<?php

use App\task5\Commands\Actions\BurnFuelCommand;
use PHPUnit\Framework\TestCase;

class BurnFuelCommandTest extends TestCase
{
    public function testBurnFuelLevelChange():void
    {

        $fuelableObject = new class extends \App\task5\Objects\GameObject{};
        $fuelableObject->setValue('fuelBurnVelocity', 2);

        $fuelableAdapter = new \App\task5\Adapters\FuelableAdapter($fuelableObject);
        $fuelableAdapter->setFuelLevel(10);

        $burnFuelCommand = new BurnFuelCommand($fuelableAdapter);
        $burnFuelCommand->execute();

        $fuelLevel = $fuelableAdapter->getFuelLevel();
        $expected = 8;

        $this->assertEquals($expected, $fuelLevel);

    }
}