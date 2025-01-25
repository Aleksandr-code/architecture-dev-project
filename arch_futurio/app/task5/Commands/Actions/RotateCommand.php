<?php

namespace App\task5\Commands\Rotation;

use App\task5\Adapters\IRotatable;
use App\task5\Commands\ICommand;
use App\task5\Support\Vector;

class RotateCommand implements ICommand
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