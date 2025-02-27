<?php 
$len=readline("enter length");
$breadth=readline("Enter Breadth");
$rad=readline("enter raduis");
$sid=readline("enter side");
$area_rec=$len *$breadth;
$area_cir=pi() *$rad* $rad;
$area_sq=$sid*$sid;
echo "the area of rec is".$area_rec;
echo "the area of cirlce is ".number_format($area_cir,2);
echo "the area of square is ".$area_sq;

?>