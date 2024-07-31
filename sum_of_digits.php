<?php
function sumOfDigits($number) {
    $number = abs($number);
    $numberStr = (string) $number;
    $sum = 0;
    for ($i = 0; $i < strlen($numberStr); $i++) {
        $sum += (int) $numberStr[$i];
    }    
    return $sum;
}
$inputNumber = 12345;
echo "The sum of digits in {$inputNumber} is: " . sumOfDigits($inputNumber);
?>
