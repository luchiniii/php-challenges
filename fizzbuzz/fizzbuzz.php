<?php
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

