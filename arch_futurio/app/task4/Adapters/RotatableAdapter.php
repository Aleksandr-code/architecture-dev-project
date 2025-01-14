<?php

namespace App\task4\Adapters;

use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Commands\AdapterInterface\IRotatable;
use App\task4\Support\Vector;

class RotatableAdapter implements IRotatable
{
    public function __construct(public IUObject $object){

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