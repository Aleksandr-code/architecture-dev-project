<?php


namespace App\task2\Commands;


use App\task2\Models\IUObject;
use App\task2\Support\Queque;
use App\task2\Support\Vector;

interface IMoveCommandStartable
{
    public function execute(IUObject $object, Vector $velocity, Queque $commandQueque):void;
}