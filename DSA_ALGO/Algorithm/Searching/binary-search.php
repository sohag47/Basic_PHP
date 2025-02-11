<?php

//! Binary search in PHP

function binarySearch (array $data, int $search_item): int {
    $left = 0;
    $right = count($data) - 1;


    while ($left <= $right) {
        $mid = ($left + $right) / 2; // 5
        return $mid;
        // // If the search item is equal to the middle element it is found
        // if($data[$mid] == $search_item){
        //     return $mid;

        // }
        // if($data[$mid] < $search_item){
        //     // search item must be in the right half array
        //     $data = array_slice($data, 0, $mid);
        // }else {
        //     // search item must be in the left half array
        //     $data = array_slice($data, $mid + 1);
        // }
        
        
    }
    return -1;
}


$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$search_item = 4;
$output = binarySearch($data, $search_item);
echo $output;