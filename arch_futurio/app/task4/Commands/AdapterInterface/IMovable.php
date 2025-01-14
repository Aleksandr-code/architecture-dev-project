<?php

namespace App\task4\Commands\AdapterInterface;

use App\task4\Support\Vector;

interface IMovable
{
    public function getPosition():Vector;
    public function setPosition(Vector $position):void;
    public function getVelocity();
}