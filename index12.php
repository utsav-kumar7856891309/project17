<!-- <?php
function change_name(&$nm){
    echo "initally the name is  $nm\n";
    $nm=$nm."_new";
    echo "this function change to name to $nm\n";
}
$name="john";
echo "My name is $name\n";
change_name($name);
echo "My name is still $name";


?> -->
<!-- <?php 
$array1=["zen","march","flick"];
$array2=array_map(function($num){
    return strlen($num);
},$array1);
print_r($array2);


?> -->
<!-- <?php 
function multiply(...$numbers){
    $result=1;
    foreach($numbers as $num){
        $result*=$num;
    }
    return $result;
    
}
$total=multiply(1,2,3,4);
echo $total;
$age=array("utsav"=>45,"ben"=>37,"joe"=>430);
echo json_encode($age);




?> -->
<?php
$json='{"peter":35,"ben":37,"joe":43}';
print_r(json_decode($json));





?>