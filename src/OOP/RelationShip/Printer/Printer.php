<?php

namespace App\OOP\RelationShip\Printer;

abstract class Printer
{
   protected string $stringToBePrinted;

    public function setStringToBePrinted(string $stringToBePrinted): void
    {
        $this->stringToBePrinted = $stringToBePrinted;
    }



   abstract public function printToScreen(): string;
}
