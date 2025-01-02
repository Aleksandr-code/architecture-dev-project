<?php

require_once dirname(__DIR__, 2).'/vendor/autoload.php';

$ship = new \App\task1\Models\SpaceShip();

$moveCommand = new \App\task1\Command\Movement();
$ship->setPosition(new \App\task1\Support\Vector(12, 5));
$ship->setVelocity(new \App\task1\Support\Vector(-7, 3));

$moveCommand->move($ship);

$rotateCommand = new \App\task1\Command\Rotation();
$ship->setAngleVelocity(new \App\task1\Support\Vector(10, 0));

$rotateCommand->rotate($ship);
$rotateCommand->rotate($ship);

var_dump($ship);