<?php


namespace App\task5\ExceptionHandler;

use App\task5\Commands\ICommand;
use App\task5\ExceptionHandler\Strategy\IExceptionStrategyHandler;
use App\task5\Support\Queue;

class ExceptionHandler implements IExceptionHandler
{
    public array $handlers;
    public Queue $commandQueue;
    private IExceptionStrategyHandler $exceptionStrategyHandler;

    public function __construct(Queue $commandQueue, IExceptionStrategyHandler $exceptionStrategyHandler){
        $this->commandQueue = $commandQueue;
        $this->exceptionStrategyHandler = $exceptionStrategyHandler;

        $this->handlers = array();
        $this->handlers[LogExceptionHandler::class] = new LogExceptionHandler($this->commandQueue);
        $this->handlers[RepeatExceptionHandler::class] = new RepeatExceptionHandler($this->commandQueue);
    }


    public function handle(ICommand $command, \Exception $exception):void
    {
        $exceptionStrategyHandler = $this->exceptionStrategyHandler->getStrategyHandler($command, $exception);
        $exceptionHandler = $this->handlers[$exceptionStrategyHandler];

        if ($exceptionHandler === null){
            throw new \Exception('No such exception');
        }

        $exceptionHandler->execute();
    }
}