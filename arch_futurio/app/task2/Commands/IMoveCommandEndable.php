<?php


namespace App\task2\Commands;

use App\task2\Models\IUObject;
use App\task2\Support\Queque;

interface IMoveCommandEndable
{
    public function execute(IUObject $object, Queque $commandQueque):Movement;
}