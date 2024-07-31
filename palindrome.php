<?php
function isPalindrome($str) {
    $cleanedStr = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
        return $cleanedStr === strrev($cleanedStr);
}
$inputString = "A man, a plan, a canal, Panama!";
if (isPalindrome($inputString)) {
    echo "\"$inputString\" is a palindrome.";
} else {
    echo "\"$inputString\" is not a palindrome.";
}
?>
