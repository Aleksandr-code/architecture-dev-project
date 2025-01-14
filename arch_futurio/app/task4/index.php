<?php

require_once dirname(__DIR__, 2).'/vendor/autoload.php';

use App\task4\ExceptionHandler\ExceptionHandler;
use App\task4\ExceptionHandler\Strategy\RepeatAndLogExceptionHandlerStrategy;
use App\task4\Support\Queue;

$commandQueue = new Queue();
$strategyRepeatAndLog = new RepeatAndLogExceptionHandlerStrategy();
$exceptionHandler = new ExceptionHandler($commandQueue, $strategyRepeatAndLog);

$rocket = new \App\task4\Objects\Rocket();
$vectorTest = new \App\task4\Support\Vector(0, 0);
$rocket->setValue('position', $vectorTest);
$rocket->setValue('velocity', $vectorTest);

$moveAdapter = new \App\task4\Adapters\MovableAdapter($rocket);
$moveCommand = new \App\task4\Commands\Actions\Movement($moveAdapter);

$commandQueue->add($moveCommand);
$command = $commandQueue->get();

try {
    $command->execute();
}
catch (Exception $ex){
    $exceptionHandler->handle($command, $ex);
}