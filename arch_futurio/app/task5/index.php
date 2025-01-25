<?php

require_once dirname(__DIR__, 2).'/vendor/autoload.php';

use App\task5\ExceptionHandler\ExceptionHandler;
use App\task5\ExceptionHandler\Strategy\RepeatAndLogExceptionHandlerStrategy;
use App\task5\Support\Queue;

$commandQueue = new Queue();
$strategyRepeatAndLog = new RepeatAndLogExceptionHandlerStrategy();
$exceptionHandler = new ExceptionHandler($commandQueue, $strategyRepeatAndLog);

$rocket = new \App\task5\Objects\Rocket();
$vectorTest = new \App\task5\Support\Vector(0, 0);
$rocket->setValue('position', $vectorTest);
$rocket->setValue('velocity', $vectorTest);

$moveAdapter = new \App\task5\Adapters\MovableAdapter($rocket);
$moveCommand = new \App\task5\Commands\Actions\MoveCommand($moveAdapter);
$noCommand = new \App\task5\Commands\Actions\NoCommand();

$longMoveMacroCommand = new \App\task5\Commands\MacroCommands\LongMoveMacroCommand($moveCommand , $commandQueue);

$commandQueue->add($longMoveMacroCommand);

$count = 1;
$stop = 10;
while (true){
    if ($count === $stop){
        break;
    }
    try {
        $command = $commandQueue->get() ?? $noCommand;
        $command->execute();
        echo $command::class . PHP_EOL;
    }
    catch (Exception $ex){
        $exceptionHandler->handle($command, $ex);
    }
    $count++;
}
