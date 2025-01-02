<?php

namespace App\task1\Command;

use App\task1\Interface\IMovable;
use App\task1\Support\Vector;

class Movement
{
    public function move(IMovable $moveObject):void
    {
       $oldPosition = $moveObject->getPosition();
       $velocity = $moveObject->getVelocity();

       //$distance = Vector::MultiplicateTwoVector($oldPosition, $velocity);

       $newPosition = Vector::SumTwoVector($oldPosition, $velocity);

       $moveObject->setPosition($newPosition);
    }
}