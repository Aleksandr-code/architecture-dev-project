<?php

namespace App\task2\Models;

interface IUObject
{
    public function getValue(string $key):Object;
    public function setValue(string $key, Object $newValue):void;
}