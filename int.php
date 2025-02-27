<?php 
function incrementByReference(&$num) {
    $num++;
}
$number = 5;
incrementByReference($number);
echo "After reference increment: $number\n";
?>