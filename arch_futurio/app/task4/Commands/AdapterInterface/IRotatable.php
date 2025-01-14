<?php

namespace App\task4\Commands\AdapterInterface;

use App\task4\Support\Vector;

interface IRotatable{
    public function getAngle():Vector;
    public function getAngleVelocity():Vector;
    public function setAngle(Vector $angle):void;
}