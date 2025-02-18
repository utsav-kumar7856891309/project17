<?php
class Car{
    public $color;
    
    public function setcolor($color){
        $this->color=$color;
    }
    public function getcolor(){
        return $this->color;
    }
}
$mycar=new Car();
$mycar->setcolor("red");
echo "The color of the car is:".$mycar->getcolor();
?>