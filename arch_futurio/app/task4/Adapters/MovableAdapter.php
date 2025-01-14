<?php

namespace App\task4\Adapters;

use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Commands\AdapterInterface\IMovable;
use App\task4\Support\Vector;

class MovableAdapter implements IMovable
{
    public function __construct(public IUObject $object){

    }

    public function getPosition(): Vector
    {
        return $this->object->getValue('position');
    }

    public function setPosition(Vector $position): void
    {
        $this->object->setValue('position', $position);
    }

    public function getVelocity()
    {
        return $this->object->getValue('velocity');
    }
}