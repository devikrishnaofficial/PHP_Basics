<?php
$terms = isset($_GET['terms']) ? (int)$_GET['terms'] : 10;
$a = 0;
$b = 1;
$fibonacciSequence = [];
for ($i = 0; $i < $terms; $i++) {
    $fibonacciSequence[] = $a;
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
echo "Fibonacci Sequence up to {$terms} terms:<br>";
echo implode(', ', $fibonacciSequence);
?>
