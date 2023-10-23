<?php

namespace App\OOP;

class Hyundai extends Car
{
    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        return $this->isOn = true;
    }

    public function turnOff(): bool
    {
        return $this->isOn = false;
    }

    public function accelerate(int $speed): int
    {
        return $this->speed = $speed;
    }

    public function park(): bool
    {
        return true;
    }


}
