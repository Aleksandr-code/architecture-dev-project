<?php

namespace App\task4\Commands\Rotation;

use App\task4\Commands\AdapterInterface\IRotatable;
use App\task4\Commands\ICommand;
use App\task4\Support\Vector;

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