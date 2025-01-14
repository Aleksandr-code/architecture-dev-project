<?php


namespace App\task4\Commands\TimeCommands;

use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Commands\Actions\Movement;
use App\task4\Support\Queue;
use App\task4\Support\Vector;

class EndMoveCommand implements IMoveCommandEndable
{
    public function execute(IUObject $object, Queue $commandQueue): Movement
    {
        $object->setValue('velocity', new Vector(0, 0));

        //TODO::обдумать логику удаление команды
        $className = Movement::class;
        $idMoveCommand = $commandQueue->find($className);

        $moveCommand = $commandQueue->remove($idMoveCommand);

        return $moveCommand;
    }
}