<?php
function binaryToDecimal($binary) {
    if (!preg_match('/^[01]+$/', $binary)) {
        return "Invalid binary number.";
    }
    $decimal = 0;
    $length = strlen($binary);
    for ($i = 0; $i < $length; $i++) {
        $digit = $binary[$length - $i - 1];
        $decimal += $digit * pow(2, $i);
    }
    
    return $decimal;
}
$binaryNumber = '1011'; 
$decimalNumber = binaryToDecimal($binaryNumber);
if (is_numeric($decimalNumber)) {
    echo "The decimal representation of binary {$binaryNumber} is: {$decimalNumber}";
} else {
    echo $decimalNumber;
}
?>
