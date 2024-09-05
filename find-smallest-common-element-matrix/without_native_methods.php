<?php

function smallestCommonElement(array $matrix): int
{
    $intersection = $matrix[0];

    for ($i = 0; $i < count($matrix); $i++) {
        $currentArray = $matrix[$i];
        $newIntersection = [];

        foreach ($intersection as $item) {
            if (in_array($item, $currentArray)) {
                $newIntersection[] = $item;
            }
        }

        $intersection = $newIntersection;
    }

    return empty($intersection) ? -1 : min($intersection);
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