<?php


namespace App\task4\Commands\TimeCommands;

use App\task4\Adapters\MovableAdapter;
use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Commands\Actions\Movement;
use App\task4\Support\Queue;
use App\task4\Support\Vector;

class StartMoveCommand implements IMoveCommandStartable
{

    public function execute(IUObject $object, Vector $velocity, Queue $commandQueue): void
    {
        $object->setValue('velocity', $velocity);

        $movableAdapter = new MovableAdapter($object);

        $moveCommand = new Movement($movableAdapter);

        $commandQueue->add($moveCommand);
    }
}