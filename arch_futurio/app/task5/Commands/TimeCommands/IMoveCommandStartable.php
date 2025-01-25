<?php


namespace App\task5\Commands\TimeCommands;

use App\task5\Objects\IUObject;
use App\task5\Support\Queue;
use App\task5\Support\Vector;

interface IMoveCommandStartable
{
    public function execute(IUObject $object, Vector $velocity, Queue $commandQueue):void;
}