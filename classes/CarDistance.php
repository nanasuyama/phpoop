<?php

require_once "Car.php";

//class Chile extends Parent - Inheritance
class CarDistance extends Car{
    //properties
    public $consumption = 2.5; //１kmあたり消費するL //global variable

    public function __constract($name){ //Global variable
        //global variable - anywhere within the class
        $this->x = 100;
        //Local variable - only inside this function //アーギュメントとしてパスすれば使える
        $x = 100;

        echo "Hello $name";
        echo "<br>";
        echo $this->get_speed(1000);
    }
    
    public function calculate($gas,$distance){  //

        $total_consumption = $this->consumption * $distance; //消費量＊距離
        echo "You have a total of ". $gas . " L. You need to travel ". $distance. " km";
        if($gas >= $total_consumption){//現ガソリンがトータル量より多い場合
            $remaining = $gas - $total_consumption;//残り　＝　現ガソリン　ー　トータル量
            $this->display($total_consumption,$remaining);
        }
        elseif($gas < $total_consumption){//給油する必要がある
            $refuel_gas = $total_consumption - $gas; // 全消費量　ー　現ガソリン
            $this->refuel($refuel_gas,$distance,$gas);
        }
    }
        
    
    public function refuel($refuel_gas,$distance,$gas){
        $distance_left = $distance / $refuel_gas;
        $total_gas = $gas + $refuel_gas;
        echo "<br>";
        echo "You ran out of gas! You have " . $distance_left . " km left.";
        echo "<br>";
        echo "Refueling...";
        echo "<br>";
        echo "You arrive to your destination!! You consumed " . $total_gas . " L";
    }

    public function display(){
        echo "<br>";
        echo "You arrived to your deswtination!! You consumed " . $total_gas . " L";
    }

}

?>