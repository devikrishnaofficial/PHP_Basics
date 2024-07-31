<?php
function countCharacterOccurrences($inputString) {
    $charCount = array();
    $chars = str_split($inputString);
    foreach ($chars as $char) {
        if (array_key_exists($char, $charCount)) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }
    return $charCount;
}
$inputString = "hello world";
$characterOccurrences = countCharacterOccurrences($inputString);
echo "Input String: " . $inputString . "\n";
echo "Character Occurrences:\n";
foreach ($characterOccurrences as $char => $count) {
    echo "'" . $char . "' : " . $count . "\n";
}
?>
