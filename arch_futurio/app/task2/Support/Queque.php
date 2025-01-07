<?php

namespace App\task2\Support;

use App\task2\Commands\ICommand;
use App\task2\Commands\Movement;

class Queque
{
    private array $queque;

    public function add(ICommand $element):void
    {
        $this->queque[] = $element;
    }

    public function find(string $className):int|\Exception
    {
        foreach ($this->queque as $key=>$command){
            if ($className === get_class($command)){
                return $key;
            }
        }
        throw new \Exception("Command don't find in queque");
    }

    public function remove($id):mixed
    {
        $removeElement = $this->queque[$id];

        unset($this->queque[$id]);

        return $removeElement;
    }
}
