<?php

use App\task5\Exceptions\CommandException;
use PHPUnit\Framework\TestCase;

class CheckFuelCommandTest extends TestCase
{
    public function testCheckFuelLow():void
    {
        $fuelable = $this->createMock(\App\task5\Adapters\IFuelable::class);
        $fuelable->method('getFuelLevel')->willReturn(-1);

        $checkFuelCommand = new \App\task5\Commands\Actions\CheckFuelCommand($fuelable);

        $this->expectException(CommandException::class);

        $checkFuelCommand->execute();
    }
}