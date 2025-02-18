<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["calgrade"])){
$s1=$_POST["num1"];
$s2=$_POST["num2"];
$s3=$_POST["num3"] ;       
$s4=$_POST["num4"];
$s5=$_POST["num5"];
$sum=$s1+$s2+$s3+$s4+$s5;

$total_marks=500;
$per=($sum/$total_marks)*100;

echo "the percentage is".number_format($per,2);
echo "\n"; 
if($per>=90 && $per<=100){
    echo" the grade is outstandig";
}elseif($per>=80 &&  $per<90){
    echo "the grade is A";
}elseif($per>=70 &&  $per<80){
    echo "the grade is b";
}
elseif($per>=60 &&  $per<70){
    echo "the grade is c";
}else{
    echo "the grade is  d";
}
    }
}