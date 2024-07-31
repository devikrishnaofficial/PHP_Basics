<?php
function reverseWords($inputString) {
    $wordsArray = explode(' ', $inputString);
    $reversedArray = array_reverse($wordsArray);
    $reversedString = implode(' ', $reversedArray);
    return $reversedString;
}
$inputString = "Hello World from ChatGPT";
$reversedString = reverseWords($inputString);
echo "Original String: " . $inputString . "\n";
echo "Reversed Words String: " . $reversedString . "\n";
?>
