<?php

// множественное наследование через трейты/миксины/примеси + интерфейсы
class Dog extends Animal
{
    public function getAge(): int
    {
        return 234;
    }
}
