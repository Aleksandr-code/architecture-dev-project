<?php

namespace App\task1\Command;

use App\task1\Interface\IRotatable;
use App\task1\Support\Vector;

class Rotation
{
    public function rotate(IRotatable $rotateObject):void
    {
        $oldAngle = $rotateObject->getAngle();
        $angleVelocity = $rotateObject->getAngleVelocity();

        $newAngle = Vector::SumTwoVector($oldAngle, $angleVelocity);

        $rotateObject->setAngle($newAngle);
    }
}