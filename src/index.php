<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\OOP\Car;
use App\OOP\Order;
use App\OOP\CarDashboard;
use App\OOP\Employee;
use App\OOP\Salary;
use App\OOP\OrganizationSalary;
use App\OOP\RelationShip\Printer\HTMLPrinter;
use App\OOP\RelationShip\MathTeacher;
use App\OOP\RelationShip\Student;

/*$hyundai = new \App\OOP\Hyundai(100, 'red', 'manual', 'hyundai', '4');
$dashboard = new CarDashboard();
$dashboard->setOilLevel(100);
$dashboard->setFuelLevel(100);
$dashboard->setAirPressure(100);
$hyundai->installDashboard($dashboard);
var_dump($hyundai->carInfo());*/
//var_dump($hyundai->accelerate(100));

//$houda = new Employee('houda',30,new OrganizationSalary(1000,0.2,0,0,0,0,0.1));
//var_dump($houda->getSalary()->calculateSalary());

//$order = new Order('casa', 'meknes', 10);
//$deliveredOrder = $order->deliverOrder($hyundai);

//var_dump($deliveredOrder);
//**********
/*$teacher = new \App\OOP\RelationShip\Teacher();
$teacher->name = 'houda';
$printer = new HTMLPrinter();
var_dump($teacher->print($printer));
unset($teacher);
$printer->setStringToBePrinted('test text to see the unset ....');
var_dump($printer->printToScreen());*/
//*****

$moha = new MathTeacher('moha');
$alaa = new \App\OOP\RelationShip\LogicTeacher('alaa');
$dahou = new Student('dahou');
$dahou->assignTemporaryTeacher($moha);
$moha->evaluateHomeWorkScore($dahou);
var_dump('Dahou was assigned this homework by '.$moha->getName().' and he '.$moha->evaluateHomeWorkScore($dahou));
$dahou->assignTemporaryTeacher($alaa);
var_dump('Dahou was assigned this homework by '.$alaa->getName().' and he '.$alaa->evaluateHomeWorkScore($dahou));
