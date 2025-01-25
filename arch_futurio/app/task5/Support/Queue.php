<?php

namespace App\task5\Support;

use App\task5\Commands\ICommand;

class Queue
{
    private array $queue;

    public function add(ICommand $element):void
    {
        $this->queue[] = $element;
    }

    public function get():?ICommand
    {
        return array_shift($this->queue);
    }

    public function find(string $className):int|\Exception
    {
        foreach ($this->queue as $key=>$command){
            if ($className === get_class($command)){
                return $key;
            }
        }
        throw new \Exception("Command don't find in queque");
    }

    public function remove($id):mixed
    {
        $removeElement = $this->queue[$id];

        unset($this->queue[$id]);

        return $removeElement;
    }
}
