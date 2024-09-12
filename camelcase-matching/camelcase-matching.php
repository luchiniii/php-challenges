<?php

class Solution {

    /**
     * @param String[] $queries
     * @param String $pattern
     * @return Boolean[]
     */
    function camelMatch(array $queries, string $pattern): array
    {
        $result = [];

        foreach ($queries as $query) {
            $j = 0;
            for ($i = 0; $i < strlen($query); $i++) {
                if (isset($pattern[$j]) && $query[$i] === $pattern[$j]) {
                    $j++;
                } elseif (ctype_upper($query[$i])) {
                    $result[] = false;
                    continue 2;
                }
            }
            $result[] = $j === strlen($pattern);
        }

        return $result;
    }
}


$queries = ["FooBar","FooBarTest","FootBall","FrameBuffer","ForceFeedBack"];
$inputQueries = implode(",", $queries);

// Test Case 1
$pattern = "FB";
$results = (new Solution())->camelMatch($queries, $pattern);
$results = implode(',', array_map(fn($result) => $result ? 'true' : 'false', $results));
echo "Input: [$inputQueries], Pattern: $pattern" . PHP_EOL;
echo "Output: [$results]" . PHP_EOL;
echo PHP_EOL;

// Test Case 1
$pattern = "FoBa";
$results = (new Solution())->camelMatch($queries, $pattern);
$results = implode(',', array_map(fn($result) => $result ? 'true' : 'false', $results));
echo "Input: [$inputQueries], Pattern: $pattern" . PHP_EOL;
echo "Output: [$results]" . PHP_EOL;
echo PHP_EOL;

// Test Case 1
$pattern = "FoBaT";
$results = (new Solution())->camelMatch($queries, $pattern);
$results = implode(',', array_map(fn($result) => $result ? 'true' : 'false', $results));
echo "Input: [$inputQueries], Pattern: $pattern" . PHP_EOL;
echo "Output: [$results]" . PHP_EOL;
echo PHP_EOL;

