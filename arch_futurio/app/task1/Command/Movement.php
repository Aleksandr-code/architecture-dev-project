<?php

namespace App\task1\Command;

use App\task1\Interface\IMovable;
use App\task1\Support\Vector;

class Movement
{
    public function move(IMovable $moveObject):void
    {
        try{
            $oldPosition = $moveObject->getPosition();
            $velocity = $moveObject->getVelocity();

            $newPosition = Vector::SumTwoVector($oldPosition, $velocity);

            $moveObject->setPosition($newPosition);
        } catch (\Exception $exception){
            throw new \Exception($exception);
        }

    }
}