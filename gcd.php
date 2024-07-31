<?php
function findGCD($a, $b) {
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    
    return $a;
}
$num1 = 48;
$num2 = 18;
echo "The GCD of {$num1} and {$num2} is: " . findGCD($num1, $num2);
?>
