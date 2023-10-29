<?php

namespace App\OOP\RelationShip\Printer;

class PlainTextPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "This is a plain text format of the string : {$this->stringToBePrinted}";
    }
}
