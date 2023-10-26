<?php

namespace App\OOP;

class CarDashboard
{
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;

    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    private function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function setOilLevel(int $oilLevel): void
    {
        $this->oilLevel = $oilLevel;
    }

    public function setFuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }

    public function setAirPressure(int $airPressure): void
    {
        $this->airPressure = $airPressure;
    }


    public function readDashboard():string {
        return "Oil level: {$this->oilLevel} Fuel level: {$this->fuelLevel} Air pressure: {$this->airPressure}";
    }

}
