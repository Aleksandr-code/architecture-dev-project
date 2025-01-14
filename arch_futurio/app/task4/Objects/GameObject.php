<?php


namespace App\task4\Objects;

use App\task4\Adapters\ObjectInterface\IUObject;

abstract class GameObject implements IUObject
{
    private array $hashMap;

    public function getValue(string $key): mixed
    {
        return $this->hashMap[$key];
    }

    public function setValue(string $key, object $newValue): void
    {
        $this->hashMap[$key] = $newValue;
    }
}