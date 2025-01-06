<?php

namespace App\task2\Commands;

use App\task2\Adapters\IRotatable;
use App\task2\Support\Vector;

class Rotation implements ICommand
{
    public function __construct(private IRotatable $rotateObject){
    }

    public function execute():void
    {
        $oldAngle = $this->rotateObject->getAngle();
        $angleVelocity = $this->rotateObject->getAngleVelocity();

        $newAngle = Vector::SumTwoVector($oldAngle, $angleVelocity);

        $this->rotateObject->setAngle($newAngle);
    }
}