<?php
declare(strict_types=1);
/*
! Algorithm
? 1. Linear Search
*/
interface LinearSearchType {}

class LinearSearch implements LinearSearchType
{
    public string|int $test_data = 7;
}

function linearSearch($test_data, array $sample_dataset): bool
{
    foreach($sample_dataset as $item)
    {
        if ($item === $test_data)
        {
            return true;
        }
        
    }
    return false;
}
$sample_dataset = [1, 3, 5, 2, 7, 10];
$test_data = 7;


$result = LinearSearch($test_data, $sample_dataset) ? "Item Found Successfully" : "Item Not Found";
echo "Result = $result".PHP_EOL;
