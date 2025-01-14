<?php


namespace App\task4\Commands\TimeCommands;

use App\task4\Adapters\ObjectInterface\IUObject;
use App\task4\Commands\Actions\Movement;
use App\task4\Support\Queue;

interface IMoveCommandEndable
{
    public function execute(IUObject $object, Queue $commandQueue):Movement;
}