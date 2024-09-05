# find smallest common element in a matrix

Given a matrix where every row is sorted in increasing order. Write a function that finds and returns a common element in all rows. If there is no common element, then returns -1. 

### Example 1:
```php
Input: $matrix = [[1,2,3,4,5],[2,4,5,8,10],[3,5,7,9,11],[1,3,5,7,9]]
Output: 5
```

### Example 2:
```php
Input: $matrix = [[1,2,3],[2,3,4],[2,3,5]]
Output: 2
```

### Example 3:
```php
Input: $matrix = [[1,2,3],[4,5,6],[7,8,9]]
Output: -1
```

## Solution 1:
this solution uses native php methods:

```php
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
```

## Solution2:
this solution 