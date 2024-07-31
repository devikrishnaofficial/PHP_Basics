<?php
$n = 5;
function factorial_recursive($n) {
    if ($n < 0) {
        return "Invalid input. Factorial is not defined for negative numbers.";
    }
    
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial_recursive($n - 1);
    }
}
echo factorial_recursive($n);
?>