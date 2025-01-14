<?php


namespace App\task4\Commands\TimeCommands;

use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Support\Queue;
use App\task4\Support\Vector;

interface IMoveCommandStartable
{
    public function execute(IUObject $object, Vector $velocity, Queue $commandQueue):void;
}