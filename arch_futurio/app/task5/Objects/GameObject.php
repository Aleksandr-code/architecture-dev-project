<?php


namespace App\task5\Objects;

abstract class GameObject implements IUObject
{
    protected array $hashMap;

    public function getValue(string $key): mixed
    {
        return $this->hashMap[$key];
    }

    public function setValue(string $key, mixed $newValue): void
    {
        $this->hashMap[$key] = $newValue;
    }
}