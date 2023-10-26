<?php

namespace App\OOP;

abstract class Car
{
    protected int $speed;
    protected string $color;
    protected string $gearbox;
    protected string $brand;
    protected string $numberOfDoors;
    protected bool $isOn = false;

    protected CarDashboard $dashboard;


    /**
     * @param int $speed
     * @param string $color
     * @param string $gearbox
     * @param string $brand
     * @param string $numberOfDoors
     */
    public function __construct(int $speed, string $color, string $gearbox, string $brand, string $numberOfDoors)
    {
        $this->speed = $speed;
        $this->color = $color;
        $this->gearbox = $gearbox;
        $this->brand = $brand;
        $this->numberOfDoors = $numberOfDoors;
    }

    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function accelerate(int $speed): int;
    public abstract function park(): bool;


    public function installDashboard(CarDashboard $dashboard): void
    {
        $this->dashboard = $dashboard;
    }

    public function carInfo(): string {
        if($this->dashboard){
            return $this->dashboard->readDashboard();
        }else{
            return "Car is not installed";
        }
    }

}
