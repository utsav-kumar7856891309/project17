<?php 
function is_prime($n){
    if($n<2) return false;
    for($i=2;$i*$i <= $n;$i++){
        if($n %$i ==0){
            return false;
        }

    }
    return true;
}
$num=intval(readline("enter a number: "));
echo $num .(is_prime($num)? "is a prime number":"is not a prime number");

?>