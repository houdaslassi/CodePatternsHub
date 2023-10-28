<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\OOP\Car;
use App\OOP\Order;
use App\OOP\CarDashboard;
use App\OOP\Employee;
use App\OOP\Salary;
use App\OOP\OrganizationSalary;

/*$hyundai = new \App\OOP\Hyundai(100, 'red', 'manual', 'hyundai', '4');
$dashboard = new CarDashboard();
$dashboard->setOilLevel(100);
$dashboard->setFuelLevel(100);
$dashboard->setAirPressure(100);
$hyundai->installDashboard($dashboard);
var_dump($hyundai->carInfo());*/
//var_dump($hyundai->accelerate(100));

$houda = new Employee('houda',30,new OrganizationSalary(1000,0.2,0,0,0,0,0.1));
var_dump($houda->getSalary()->calculateSalary());
//$order = new Order('casa', 'meknes', 10);
//$deliveredOrder = $order->deliverOrder($hyundai);

//var_dump($deliveredOrder);
