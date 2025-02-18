<?php 
function countvowel($string1){
    return preg_match_all('/[aeioAEIOU]/',$string1);
}

$string1='utsav';
echo countvowel($string1);

?>
<?php 
$cart=["thiss "=>30,"vanshika"=>400,"utttsav"=>500];
// foreach($cart as $item){
//     echo $item;
//     echo "\n";
// }
// if(in_array("thiss",$cart)){
//     echo "this is not find in array";
// }else{
//     echo "this is present in arry ";
// }
// sort($cart);
// echo "\n";
// print_r($cart);
// echo "\n";
// rsort($cart);
// print_r($cart);


asort($cart);






?>