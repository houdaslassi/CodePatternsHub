<?php

namespace App\OOP;

class Order
{
    protected string $source;
    protected string $destination;
    protected int $weight;

    /**
     * @param string $source
     * @param string $destination
     * @param int $weight
     */
    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }


    public function deliverOrder(Car $car): string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(100);
        $car->park();
        $car->turnOff();
        if($car instanceof WeightHolder){
            $car->leftCargo();
        }
        return "I'm moving from this {$this->source} to this {$this->destination} to deliver this package of weight {$this->weight} kg";
    }
}
