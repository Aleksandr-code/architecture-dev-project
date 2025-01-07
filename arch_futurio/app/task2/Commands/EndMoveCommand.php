<?php


namespace App\task2\Commands;

use App\task2\Models\IUObject;
use App\task2\Support\Queque;
use App\task2\Support\Vector;

class EndMoveCommand implements IMoveCommandEndable
{

    public function execute(IUObject $object, Queque $commandQueque): Movement
    {
        $object->setValue('velocity', new Vector(0, 0));

        //TODO::обдумать логику удаление команды
        $className = Movement::class;
        $idMoveCommand = $commandQueque->find($className);

        $moveCommand = $commandQueque->remove($idMoveCommand);

        return $moveCommand;
    }
}