<?php

namespace DesignPatterns\Decorator;

interface Coffee {
    public function getCost(): float;
    public function getDescription(): string;
}

class SimpleCoffee implements Coffee {
    public function getCost(): float {
        return 2.0;
    }

    public function getDescription(): string {
        return "Simple coffee";
    }
}

abstract class CoffeeDecorator implements Coffee {
    protected Coffee $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }
}

class MilkDecorator extends CoffeeDecorator {
    public function getCost(): float {
        return $this->coffee->getCost() + 0.5;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . " + milk";
    }
}

class SugarDecorator extends CoffeeDecorator {
    public function getCost(): float {
        return $this->coffee->getCost() + 0.2;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . " + sugar";
    }
}

// Example usage:
// $coffee = new SimpleCoffee();
// $coffee = new MilkDecorator($coffee);
// $coffee = new SugarDecorator($coffee);
// echo $coffee->getDescription() . " costs $" . $coffee->getCost(); 