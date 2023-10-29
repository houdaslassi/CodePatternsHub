<?php

namespace App\OOP\RelationShip;

use App\OOP\RelationShip\Printer\Printer;

class Teacher
{
   public string $name;

   public function print(Printer $printer): string {
       $printer->setStringToBePrinted($this->name);
        return $printer->printToScreen();
   }
}
