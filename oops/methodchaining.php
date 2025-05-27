<?php
class Car{
    public function start(){
        echo "Car started";
        return $this;
    }
    public function stop(){
        echo "Car stopped";
        return $this;
    }
}
$car=new Car();
$car->start()->stop();
?>