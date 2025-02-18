<?php
$s1=readline("enter the marks in english");
$s2=readline("enter the marks in maths");
$s3=readline("enter the marks in sciensce");
$s4=readline("enter the marks in social science");
$s5=readline("enter the marks in hindi");
$sum=$s1+$s2+$s3+$s4+$s5;

$total_marks=500;
$per=($sum/$total_marks)*100;
echo "the percentage is".number_format($per,3);
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


?>