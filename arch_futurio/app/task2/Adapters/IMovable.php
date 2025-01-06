<?php

namespace App\task2\Adapters;

use App\task2\Support\Vector;

interface IMovable
{
    public function getPosition():Vector;
    public function setPosition(Vector $position):void;
    public function getVelocity();
}