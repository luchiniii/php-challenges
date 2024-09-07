<?php

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

$input = 'hello world:a:l:o';
echo 'Input: ' . $input . PHP_EOL;
echo 'Output: ' . (new Cipher($input, ['h' => 't', 'e' => 'a', 'a' => 'b', 'c' => 'd']));