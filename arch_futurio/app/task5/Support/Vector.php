<?php


namespace App\task5\Support;


class Vector
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setVector(Vector $vector):void
    {
        $this->x = $vector->getX();
        $this->y = $vector->getY();
    }

    private function getX():int
    {
        return $this->x;
    }

    private function getY():int
    {
        return $this->y;
    }

    public function getVector():Vector
    {
        return $this;
    }

    static function SumTwoVector(Vector $first, Vector $second):Vector
    {
        $newVector = new Vector($first->x, $first->y);
        $newVector->x += $second->x;
        $newVector->y += $second->y;
        return $newVector;
    }

}