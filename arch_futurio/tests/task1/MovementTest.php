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

    public function testMoveCommandDontGetPositionException():void
    {
        $moveCommand = new Movement();

        $movableObject = new class extends GameObject{
            public function getPosition(): Vector
            {
                throw new Exception("Don't get position");
            }
        };

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Don't get position");

        $moveCommand->move($movableObject);
    }

    public function testMoveCommandDontGetVelocityException():void
    {
        $moveCommand = new Movement();

        $movableObject = new class extends GameObject{
            public function getVelocity(): Vector
            {
                throw new Exception("Don't get velocity");
            }
        };

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Don't get velocity");

        $moveCommand->move($movableObject);
    }

    public function testMoveCommandDontSetPositionException():void
    {
        $moveCommand = new Movement();

        $movableObject = new class extends GameObject{
            public function setPosition(Vector $vector): void
            {
                throw new Exception("Don't set position");
            }
        };

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Don't set position");

        $moveCommand->move($movableObject);
    }

}