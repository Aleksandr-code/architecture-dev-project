<?php

namespace App\task2\Adapters;

use App\task2\Support\Vector;

interface IRotatable{
    public function getAngle():Vector;
    public function getAngleVelocity():Vector;
    public function setAngle(Vector $angle):void;
}