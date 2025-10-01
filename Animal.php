<?php


class Animal
{
    protected static int $counter = 0;
    protected int $id = 0;

    public function __construct(){
        $this->id = static::$counter;
        static::$counter++;
    }

    public function getProduct(int $min, int $max): int
    {
        return rand($min, $max);
    }

}