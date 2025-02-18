<?php 
  $ages=[23,34,34,5,6,67,78,99];
  $evenages=array_filter($ages,function($nums){
      return $nums%2==0;

  });

print_r($evenages);
$oddages=array_filter($ages,function($nums){
    return $nums%2!=0;
});
print_r($oddages);
$newages=array_push($ages,12,23,45);
print_r($ages);
echo "<br>";
echo $newages;
$name=array("manoh","shayam","king");
$lname=array("singh","rai","singh");
$fname=array_combine($name,$lname);
print_r($fname);
$a=array("block 33","king 45","king 45","block 45");
print_r(array_count_values($a));
$a1=array(12,23,4,5,67);
$a2=array(3,23,45,6,7,89);
$a3=array_intersect($a1,$a2);
print_r($a3);
$car=["maruti","fiat","zen"];
$search=array_search("fiat",$car);
echo "the location is $search";
$a=array("red","green","yellow","brown");
print_r(array_slice($a,1,2));
$str="this is lovely professional university";
print_r(explode(" ",$str));
$arr=["hello","how","are","you"];
print_r(implode("  ",$arr));
?>