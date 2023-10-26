<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\OOP\Car;
use App\OOP\Order;
use App\OOP\CarDashboard;

$hyundai = new \App\OOP\Hyundai(100, 'red', 'manual', 'hyundai', '4');
$dashboard = new CarDashboard();
$dashboard->setOilLevel(100);
$dashboard->setFuelLevel(100);
$dashboard->setAirPressure(100);
$hyundai->installDashboard($dashboard);
var_dump($hyundai->carInfo());
//var_dump($hyundai->accelerate(100));

$order = new Order('casa', 'meknes', 10);
$deliveredOrder = $order->deliverOrder($hyundai);

var_dump($deliveredOrder);
