<?php
function findLargestNumber($numbers) {
    if (empty($numbers)) {
        return null;
    }
    $largest = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $largest) {
            $largest = $number;
        }
    }    
    return $largest;
}
$numbersArray = [5, 3, 9, 1, 12, 7];
$largestNumber = findLargestNumber($numbersArray);
if ($largestNumber !== null) {
    echo "The largest number in the array is: $largestNumber";
} else {
    echo "The array is empty.";
}
?>
