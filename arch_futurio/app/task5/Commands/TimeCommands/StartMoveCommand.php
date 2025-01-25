<?php


namespace App\task5\Commands\TimeCommands;

use App\task5\Adapters\MovableAdapter;
use App\task5\Objects\IUObject;
use App\task5\Commands\Actions\MoveCommand;
use App\task5\Support\Queue;
use App\task5\Support\Vector;

class StartMoveCommand implements IMoveCommandStartable
{

    public function execute(IUObject $object, Vector $velocity, Queue $commandQueue): void
    {
        $object->setValue('velocity', $velocity);

        $movableAdapter = new MovableAdapter($object);

        $moveCommand = new MoveCommand($movableAdapter);

        $commandQueue->add($moveCommand);
    }
}