<?php

function smallestCommonElement(array $matrix): int
{
    $result = array_intersect(...$matrix);
    if (empty($result)) {
        return -1;
    }
    return min($result);
}

$matrix1 = [[1,2,3,4,5],[2,4,5,8,10],[3,5,7,9,11],[1,3,5,7,9]];
echo 'Input: ' . json_encode($matrix1) . PHP_EOL;
echo 'Output: ' . smallestCommonElement($matrix1) . PHP_EOL;

echo PHP_EOL;
$matrix2 = [[1,2,3],[2,3,4],[2,3,5]];
echo 'Input: ' . json_encode($matrix2) . PHP_EOL;
echo 'Output: ' . smallestCommonElement($matrix2) . PHP_EOL;

echo PHP_EOL;
$matrix3 = [[1,2,3],[4,5,6],[7,8,9]];
echo 'Input: ' . json_encode($matrix3) . PHP_EOL;
echo 'Output: ' . smallestCommonElement($matrix3) . PHP_EOL;