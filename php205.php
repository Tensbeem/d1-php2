<?php
    class Car{
        function testCar(){
            //$msg = "Thailand";
            $this->model = "UV";
        }
    }
    $newCar = new Car();
    echo $newCar->model;
?>