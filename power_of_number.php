<?php
function power($base, $exponent) {
    if ($exponent == 0) {
        return 1;
    }
    if ($exponent == 1) {
        return $base;
    }
    return $base * power($base, $exponent - 1);
}
$base = 2;
$exponent = 3;
$result = power($base, $exponent);
echo "The result of $base to the power of $exponent is: " . $result . "\n";
?>
