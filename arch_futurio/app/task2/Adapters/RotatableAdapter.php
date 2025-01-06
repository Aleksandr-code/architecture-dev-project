<?php

namespace App\task2\Adapters;

use App\task2\Models\IUObject;
use App\task2\Support\Vector;

class RotatableAdapter implements IRotatable
{
    public function __construct(public IUObject $object){

    }

    public function getAngle(): Vector
    {
        return $this->object['angle'];
    }

    public function getAngleVelocity(): Vector
    {
        return $this->object['angleVelocity'];
    }

    public function setAngle(Vector $angle): void
    {
        $this->object['angle'] = $angle;
    }
}