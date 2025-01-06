<?php

use PHPUnit\Framework\TestCase;
use App\task1\Command\Movement;
use App\task1\Models\GameObject;
use App\task1\Support\Vector;

class MovementTest extends TestCase
{
    public function testMoveCommand(){
        $moveCommand = new Movement();
        $movableObject = new class extends GameObject{
            public function __construct()
            {
                parent::__construct();
                $this->position = new Vector(12, 5);
                $this->velocity = new Vector(-7,3);
            }
        };

        $moveCommand->move($movableObject);

        $expected = new Vector(5, 8);

        $this->assertEquals($expected, $movableObject->getPosition());
    }

}