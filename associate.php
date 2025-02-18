<?php 
// $products=["laptop"=>1200,"tablet"=>600,"smartphone"=>600,"Desktop"=>1500];
// asort($products);
// print_r($products);
// ksort($products);
// print_r($products);
// $max1=max($products);
// echo "the max prize is".max($products);
// $producs_name=array_search($max1,$products);
// echo "the product having max price of array ".$producs_name;
// $min=min($products);
// $products_min=array_search($min,$products);
// echo "the product having minimum price of array".$products_min;
// $a1=array(12,23,4,5,67);
// $a2=array(3,23,45,6,7,89);
// $a3=array_intersect($a1,$a2);
// print_r($a3);
// $name=array("manoh","shayam","king");
// $lname=array("singh","rai","singh");
// $fname=array_combine($name,$lname);
// print_r($fname);
// $numbers=[10,20,30,40,50];
// print_r($numbers);
// array_pop($numbers);
// print_r($numbers);
// array_shift($numbers);
// print_r($numbers);
$ages=[23,34,34,5,6,67,78,99];
$evenages=array_filter($ages,function($nums){
    return $nums%2==0;

});
print_r($evenages);
?>