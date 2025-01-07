<?php


namespace App\task2\Commands;


use App\task2\Adapters\MovableAdapter;
use App\task2\Models\IUObject;
use App\task2\Support\Queque;
use App\task2\Support\Vector;

class StartMoveCommand implements IMoveCommandStartable
{

    public function execute(IUObject $object, Vector $velocity, Queque $commandQueque): void
    {
        $object->setValue('velocity', $velocity);

        $movableAdapter = new MovableAdapter($object);

        $moveCommand = new Movement($movableAdapter);

        $commandQueque->add($moveCommand);
    }
}