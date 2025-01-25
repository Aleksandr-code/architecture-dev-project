<?php


namespace App\task5\Adapters;


interface IFuelable
{
    public function getFuelLevel():int;
    public function setFuelLevel(int $newValue):void;
    public function getFuelBurnVelocity():int;
}