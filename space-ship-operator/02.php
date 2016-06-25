<?php

class Validator
{
    public function compareValues(int $number1, int $number2) : int
    {
        return $number1 <=> $number2;
    }
}

$validator = new Validator();

echo "COMP 1 : {$validator->compareValues(1, 2)} \n";
echo "COMP 2 : {$validator->compareValues(2, -6)} \n";
echo "COMP 3 : {$validator->compareValues(1, 1)} \n";
