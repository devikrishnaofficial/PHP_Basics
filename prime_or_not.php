<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true; 
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6; 
    }
    
    return true; 
}
$number = 29; 
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
