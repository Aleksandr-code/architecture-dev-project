<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\task3\QuadraticEquation;

class QuadraticEquationTest extends TestCase
{
    public function testQuadraticEquationReturnNoRoots():void
    {
        $equation = new QuadraticEquation();
        $testA = 1;
        $testB = 0;
        $testC = 1;

        $roots = $equation->solve($testA, $testB, $testC);

        self::assertEquals([], $roots);
    }

    public function testQuadraticEquationReturnTwoRoots():void
    {
        $equation = new QuadraticEquation();
        $testA = 1;
        $testB = 0;
        $testC = -1;

        $roots = $equation->solve($testA, $testB, $testC);

        self::assertEquals([1, -1], $roots);
    }

    public function testQuadraticEquationReturnOneRoot():void
    {
        $equation = new QuadraticEquation();
        $testA = 1;
        $testB = 2;
        $testC = 1;

        $roots = $equation->solve($testA, $testB, $testC);

        self::assertEquals([-1, -1], $roots);
    }

    public function testQuadraticEquationExceptionVarANotNull():void
    {
        $equation = new QuadraticEquation();
        $testA = 0;
        $testB = 2;
        $testC = 1;

        self::expectException(InvalidArgumentException::class);
        self::expectExceptionMessage('a не равно 0');

        $equation->solve($testA, $testB, $testC);
    }

    public function testQuadraticEquationExceptionVarsTypeString():void
    {
        $equation = new QuadraticEquation();
        $testA = '5';
        $testB = '2';
        $testC = '1';

        self::expectException(TypeError::class);

        $equation->solve($testA, $testB, $testC);
    }

}