<?php

namespace App\task5\Commands\Actions;

use App\task5\Adapters\IMovable;
use App\task5\Commands\ICommand;
use App\task5\Support\Vector;

class MoveCommand implements ICommand
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