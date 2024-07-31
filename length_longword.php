<?php
function lengthOfLongestWord($str) {
    $words = explode(' ', trim($str));
    $maxLength = 0;
    foreach ($words as $word) {
        $currentLength = strlen($word);
        if ($currentLength > $maxLength) {
            $maxLength = $currentLength;
        }
    }    
    return $maxLength;
}
$inputString = "The quick brown fox jumps over the lazy dog";
$longestWordLength = lengthOfLongestWord($inputString);
echo "The length of the longest word is: $longestWordLength";
?>
