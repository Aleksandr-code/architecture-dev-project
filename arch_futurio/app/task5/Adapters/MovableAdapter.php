<?php

namespace App\task5\Adapters;

use App\task5\Objects\IUObject;
use App\task5\Support\Vector;

class MovableAdapter implements IMovable
{
    public function __construct(private IUObject $object){

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