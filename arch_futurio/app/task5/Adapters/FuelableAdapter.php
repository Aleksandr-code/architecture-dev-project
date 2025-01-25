<?php


namespace App\task5\Adapters;


use App\task5\Objects\IUObject;

class FuelableAdapter implements IFuelable
{

    public function __construct(private IUObject $object)
    {
    }

    public function getFuelLevel(): int
    {
        return $this->object->getValue('fuelLevel');
    }

    public function setFuelLevel(int $newValue): void
    {
        $this->object->setValue('fuelLevel', $newValue);
    }

    public function getFuelBurnVelocity(): int
    {
        return $this->object->getValue('fuelBurnVelocity');
    }
}