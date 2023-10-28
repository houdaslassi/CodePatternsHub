<?php
namespace App\OOP;
class Employee
{

    private string $name;
    private int $age;
    private Salary $salary;


    public function __construct(string $name,int $age, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }

}
