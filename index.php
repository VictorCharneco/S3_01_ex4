<?php

require_once ('class/SwitchInterface.php');
require_once ('class/HeatInterface.php');
require_once ('class/WashInterface.php');
require_once ('class/ElectricHeater.php');
require_once ('class/WashingMachine.php');

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();


?>