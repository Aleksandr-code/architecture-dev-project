<?php

declare(strict_types=1);

namespace App\task3;

class QuadraticEquation
{

    public function solve(float $a, float $b, float $c):array{
        $epsilon = 0.00001;

        if (abs($a) < $epsilon){
            throw new \InvalidArgumentException('a не равно 0');
        }

        $discriminant = $b*$b - 4*$a*$c;

        if ($discriminant < 0 ){
            return [];
        }

        if ($discriminant > 0){
            $x1 = -$b + sqrt($discriminant) / 2 * $a;
            $x2 = -$b - sqrt($discriminant) / 2 * $a;
            return [$x1, $x2];
        }

        if ($discriminant < $epsilon){
            $x = -$b / 2 * $a;
            return [$x, $x];
        }

    }
}