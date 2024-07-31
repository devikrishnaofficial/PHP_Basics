<?php
function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}
$inputArray = array(1, 2, 3, 2, 4, 5, 5, 6);
$uniqueArray = removeDuplicates($inputArray);
echo "Original Array: ";
print_r($inputArray);
echo "Array with Duplicates Removed: ";
print_r($uniqueArray);
?>
