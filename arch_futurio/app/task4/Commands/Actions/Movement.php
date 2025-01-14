<?php

namespace App\task4\Commands\Actions;

use App\task4\Commands\AdapterInterface\IMovable;
use App\task4\Commands\ICommand;
use App\task4\Support\Vector;

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