<?php

namespace App\task5\Adapters;

use App\task5\Support\Vector;

interface IMovable
{
    public function getPosition():Vector;
    public function setPosition(Vector $position):void;
    public function getVelocity();
}