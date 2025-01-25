<?php

namespace App\task5\Commands\ExceptionCommands;

use App\task5\Commands\ICommand;

class LogCommand implements ICommand
{
    public function __construct(private ICommand $command, private \Exception $exception){}

    public function execute(): void
    {
        $this->logMessage();
        throw new \Exception($this->exception);
    }

    private function logMessage():void
    {
        $logFile = 'application.log';
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "{$timestamp} - {$this->command} - {$this->exception}\n";
        error_log($logEntry, 3, $logFile);
    }
}