<?php

namespace App\task1\Models;

use App\task1\Interface\IMovable;
use App\task1\Interface\IRotatable;
use App\task1\Support\Vector;

abstract class GameObject implements IMovable, IRotatable
{
    protected Vector $position;
    protected Vector $angle;
    protected Vector $velocity;
    protected Vector $angleVelocity;

    public function __construct(){
        $this->position = new Vector(0 ,0);
        $this->angle = new Vector(0 ,0);
        $this->velocity = new Vector(0 ,0);
        $this->angleVelocity = new Vector(0 ,0);
    }

    public function getPosition(): Vector
    {
        return $this->position;
    }

    public function setPosition(Vector $position): void
    {
        $this->position->setVector($position);
    }

    public function getVelocity():Vector
    {
        return $this->velocity;
    }

    public function setVelocity(Vector $velocity):void
    {
        $this->velocity->setVector($velocity);
    }

    public function getAngle(): Vector
    {
        return $this->angle;
    }

    public function getAngleVelocity(): Vector
    {
        return $this->angleVelocity;
    }

    public function setAngleVelocity(Vector $angleVelocity): void
    {
        $this->angleVelocity->setVector($angleVelocity);
    }

    public function setAngle(Vector $angle): void
    {
        $this->angle->setVector($angle);
    }
}