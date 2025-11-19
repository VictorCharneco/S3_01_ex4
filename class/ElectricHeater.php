<?php

class ElectricHeater implements SwitchInterface, HeatInterface{
    public function turnOn():void{
        echo "Encendiendo ...";
    }
    public function turnOff():void{
        echo "Apagando ...";
    }
    public function heat():void{
        echo "Calentando ...";
    }

}

?>