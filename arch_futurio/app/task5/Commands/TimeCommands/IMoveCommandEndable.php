<?php


namespace App\task5\Commands\TimeCommands;

use App\task5\Objects\IUObject;
use App\task5\Commands\Actions\MoveCommand;
use App\task5\Support\Queue;

interface IMoveCommandEndable
{
    public function execute(IUObject $object, Queue $commandQueue):MoveCommand;
}