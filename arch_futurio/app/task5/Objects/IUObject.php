<?php

namespace App\task5\Objects;

interface IUObject
{
    public function getValue(string $key):mixed;
    public function setValue(string $key, mixed $newValue):void;
}