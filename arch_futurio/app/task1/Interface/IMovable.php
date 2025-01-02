<?php

namespace App\task1\Interface;

use App\task1\Support\Vector;

interface IMovable
{
    public function getPosition():Vector;
    public function setPosition(Vector $vector):void;
    public function getVelocity();
}