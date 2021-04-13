<?php

class Goose extends Animal implements FlyingAnimal
{
    public function fly(): string
    {
        return "im flying";
    }
}
