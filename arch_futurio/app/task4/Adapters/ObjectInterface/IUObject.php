<?php

namespace App\task4\Adapters\ObjectInterface;

interface IUObject
{
    public function getValue(string $key):mixed;
    public function setValue(string $key, Object $newValue):void;
}