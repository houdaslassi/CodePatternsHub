<?php

namespace App\OOP\RelationShip\Printer;

abstract class Printer
{
   protected string $stringToBePrinted;

   abstract public function printToScreen(): string;
}
