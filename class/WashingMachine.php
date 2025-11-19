<?php

class WashingMachine implements SwitchInterface, WashInterface{

    public function turnOn():void{
        echo "Encendiendo ...";
    }

    public function turnOff():void{
        echo "Apagando ...";
    }

    public function wash():void{
        echo "Lavando ...";
    }
}

?>