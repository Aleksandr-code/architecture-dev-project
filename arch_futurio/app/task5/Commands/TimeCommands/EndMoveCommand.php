<?php


namespace App\task5\Commands\TimeCommands;

use App\task5\Objects\IUObject;
use App\task5\Commands\Actions\MoveCommand;
use App\task5\Support\Queue;
use App\task5\Support\Vector;

class EndMoveCommand implements IMoveCommandEndable
{
    public function execute(IUObject $object, Queue $commandQueue): MoveCommand
    {
        $object->setValue('velocity', new Vector(0, 0));

        //TODO::обдумать логику удаление команды
        $className = MoveCommand::class;
        $idMoveCommand = $commandQueue->find($className);

        $moveCommand = $commandQueue->remove($idMoveCommand);

        return $moveCommand;
    }
}