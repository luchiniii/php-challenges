# find smallest common element in a matrix challenge

Given a matrix where every row is sorted in increasing order. Write a function that finds and returns a common element in all rows. If there is no common element, then returns -1. 

### Test Case 1:
```php
Input: $matrix = [[1,2,3,4,5],[2,4,5,8,10],[3,5,7,9,11],[1,3,5,7,9]]
Output: 5
```

### Test Case 2:
```php
Input: $matrix = [[1,2,3],[2,3,4],[2,3,5]]
Output: 2
```

### Test Case 3:
```php
Input: $matrix = [[1,2,3],[4,5,6],[7,8,9]]
Output: -1
```

## Solution 1: [link](https://3v4l.org/Isqlo)
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

## Solution2: [link](https://3v4l.org/XVbGZ)
this solution do not use native php methods:

```php
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
```