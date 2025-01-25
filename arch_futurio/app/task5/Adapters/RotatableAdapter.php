<?php

namespace App\task5\Adapters;

use App\task5\Objects\IUObject;
use App\task5\Support\Vector;

class RotatableAdapter implements IRotatable
{
    public function __construct(private IUObject $object){

    }

    public function getAngle(): Vector
    {
        return $this->object->getValue('angle');
    }

    public function getAngleVelocity(): Vector
    {
        return $this->object->getValue('angleVelocity');
    }

    public function setAngle(Vector $angle): void
    {
        $this->object->setValue('angle', $angle);
    }
}