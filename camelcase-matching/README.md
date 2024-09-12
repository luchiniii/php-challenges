# Camelcase Matching Challenge

Given an array of strings `queries` and a string `pattern`, return a boolean array `answer` where `answer[i]` is `true` if `queries[i]` matches pattern, and `false` otherwise.

A query word `queries[i]` matches `pattern` if you can insert lowercase English letters pattern so that it equals the query. You may insert each character at any position and you may not insert any characters.

### Example 1:

```php
Input: queries = ["FooBar","FooBarTest","FootBall","FrameBuffer","ForceFeedBack"], pattern = "FB"
Output: [true,false,true,true,false]
Explanation: "FooBar" can be generated like this "F" + "oo" + "B" + "ar".
"FootBall" can be generated like this "F" + "oot" + "B" + "all".
"FrameBuffer" can be generated like this "F" + "rame" + "B" + "uffer".
```

### Example 2:

```php
Input: queries = ["FooBar","FooBarTest","FootBall","FrameBuffer","ForceFeedBack"], pattern = "FoBa"
Output: [true,false,true,false,false]
Explanation: "FooBar" can be generated like this "Fo" + "o" + "Ba" + "r".
"FootBall" can be generated like this "Fo" + "ot" + "Ba" + "ll".
```
### Example 3:

```php
Input: queries = ["FooBar","FooBarTest","FootBall","FrameBuffer","ForceFeedBack"], pattern = "FoBaT"
Output: [false,true,false,false,false]
Explanation: "FooBarTest" can be generated like this "Fo" + "o" + "Ba" + "r" + "T" + "est".
```


## Constraints:

- `1 <= pattern.length, queries.length <= 100`
- `1 <= queries[i].length <= 100`
- `queries[i]` and `pattern` consist of English letters.


## Solution [link](https://3v4l.org/GJSab)

```php
class Solution {

    /**
     * @param String[] $queries
     * @param String $pattern
     * @return Boolean[]
     */
    function camelMatch($queries, $pattern) {
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
```