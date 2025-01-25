<?php

use App\task5\Commands\ICommand;
use App\task5\Exceptions\CommandException;
use App\task5\Commands\MacroCommands\BaseMacroCommand;
use PHPUnit\Framework\TestCase;

class MacroCommandTest extends TestCase
{
    public function testMacroCommandThrowException():void
    {
        $testCommandFirst = new class implements ICommand{
            public function execute(): void
            {
            }
        };
        $testCommandSecond = new class implements ICommand{
            public function execute(): void
            {
                throw new CommandException('');
            }
        };
        $testCommandThird = new class implements ICommand{
            public function execute(): void
            {
                echo "Warning! Warning!";
            }
        };

        $arrayCommands = [$testCommandFirst, $testCommandSecond, $testCommandThird];

        $macroCommand = new BaseMacroCommand($arrayCommands);

        $this->expectException(CommandException::class);

        $macroCommand->execute();

    }
}