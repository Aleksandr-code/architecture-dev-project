<?php

namespace App\task2\Commands;

use App\task2\Adapters\IMovable;
use App\task2\Support\Vector;

class Movement implements ICommand
{
    public function __construct(private IMovable $moveObject){}

    public function execute():void
    {
       $oldPosition = $this->moveObject->getPosition();
       $velocity = $this->moveObject->getVelocity();

       $newPosition = Vector::SumTwoVector($oldPosition, $velocity);

        $this->moveObject->setPosition($newPosition);
    }
}