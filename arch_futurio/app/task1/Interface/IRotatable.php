<?php

namespace App\task1\Interface;

use App\task1\Support\Vector;

interface IRotatable{
    public function getAngle():Vector;
    public function getAngleVelocity():Vector;
    public function setAngle(Vector $vector):void;
}