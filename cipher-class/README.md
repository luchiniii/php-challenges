# Cesaer Cipher Class

I was given this class. The goal was to add the body for the `__construct` method and, at the end we should see the result of the ciphered string just by calling printing the object like this
`echo new Cipher('something')`

so the given class looks like this

```php
abstract class AbstractCipher
{
    abstract public function __construct(string $record, array $matrix);
}

class Cipher extends AbstractCipher
{
    public function __construct(protected string $record, protected array $matrix)
    {
    }
}
```


We need to implement the abstract class `AbstractCipher` also the given inputs are like this:

```php
$record = 'hello world:a:l:o';
```
Where the first string is the string we want to cipher and the rest of the string will be part of the rules.

```php
$matrix = ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd'];  
```
Where matrix are the rules. every key-value represents the replacement rules for the given stirng.

For the given example the result should be:
```php
lfppt wtrpd
```

Pay attention on how magic methods work on a class, here we should use `__toString` 


### Test Case 1
```php
Input: $record = 'hello world:a:b:c'; $matrix = ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd']; 
Output: lfppt wtrpd
```

### Test Case 2
```php
Input: $record = 'hello world 0123:a:b:c'; $matrix = ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd']; 
Output: lfppt wtrpd abc3
```


## Solution [link](https://3v4l.org/UKOBX)

```php
abstract class AbstractCipher
{
    abstract public function __construct(string $record, array $matrix);

}

class Cipher extends AbstractCipher
{

    public function __toString(): string
    {
        return $this->cipher();
    }

    public function __construct(protected string $record, protected array $matrix)
    {
        $rules = explode(':', $this->record);
        $this->record = array_shift($rules);
        $this->matrix = array_merge($this->matrix, $rules);

        return $this;
    }

    protected function cipher(): string
    {
        return strtr($this->record, $this->matrix);
    }
}

$record = 'hello world:a:b:c';
$matrix = ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd'];
echo 'Input: ' . $record . PHP_EOL;
echo 'Output: ' . (new Cipher($record, $matrix)) . PHP_EOL;

//----------------------------------------------------------------------------------------

$record = 'hello world 0123:a:b:c';
$matrix = ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd'];
echo 'Input: ' . $record . PHP_EOL;
echo 'Output: ' . (new Cipher($record, $matrix)) . PHP_EOL;
```


