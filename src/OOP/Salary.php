<?php

namespace App\OOP;

class Salary
{
    protected float $salary;
    protected float $tax;
    protected int $absent;
    protected int $overTime;
    protected float $overTimeRate;
    protected float $absenceRate;

    /**
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $overTime
     * @param float $overTimeRate
     * @param float $absenceRate
     */
    public function __construct(float $salary, float $tax, int $absent, int $overTime, float $overTimeRate, float $absenceRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
        $this->absenceRate = $absenceRate;
    }

    public function calculateSalary(): float {
        return $this->salary - ($this->salary * $this->tax);
    }
}
