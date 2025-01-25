<?php

namespace App\task5\Adapters;

use App\task5\Support\Vector;

interface IRotatable{
    public function getAngle():Vector;
    public function getAngleVelocity():Vector;
    public function setAngle(Vector $angle):void;
}