<?php

namespace App\task2\Adapters;

use App\task2\Models\IUObject;
use App\task2\Support\Vector;

class MovableAdapter implements IMovable
{
    public function __construct(public IUObject $object){

    }

    public function getPosition(): Vector
    {
        return $this->object['position'];
    }

    public function setPosition(Vector $position): void
    {
        $this->object['position'] = $position;
    }

    public function getVelocity()
    {
        return $this->object['velocity'];
    }
}