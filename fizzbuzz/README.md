# FizzBuzz Challenge 

Write a program that prints the numbers from 1 to 100. But for multiples of three, print "Fizz" instead of the number, and for multiples of five, print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

## Solution [link](https://3v4l.org/agcqG)

````php
function fizzBuzz(int $n): void
{
    for ($i = 1; $i <= $n; $i++) {
        if (($i % 3) === 0 && ($i % 5) === 0) {
            echo 'FizzBuzz' . PHP_EOL;
            continue;
        }
        if (($i % 3) === 0) {
            echo 'Fizz' .PHP_EOL;
            continue;
        }
        if (($i % 5) === 0){
            echo 'Buzz' . PHP_EOL;
            continue;
        }
        echo $i . PHP_EOL;
    }
}

$input = 15;
echo 'Input: ' . $input . PHP_EOL;
echo 'Output: ' . PHP_EOL;
fizzBuzz($input);
````

