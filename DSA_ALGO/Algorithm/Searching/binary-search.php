<?php

//! Binary search in PHP

function binarySearch (array $data, int $search_item): int {
    if (count($data) === 0) return false; 
    $low = 0;
    $high = count($data) - 1;


    while ($low <= $high) {

        // get the middle element
        $mid =  floor(($low + $high) / 2);

        // If the search item is equal to the middle element it is found
        if($data[$mid] == $search_item) return $mid;
        
        if ($search_item < $data[$mid]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        }
    }
    // If we reach here element x doesn't exist 
    return false;
}


$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$search_item = 4;
$output = binarySearch($data, $search_item);
echo $output === false ? "Element is not present in array" : "Element is present at index " . $output.PHP_EOL;