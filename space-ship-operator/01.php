<?php

class Validator
{
    public function compareValues(int $number1, int $number2) : int
    {
        if ($number1 == $number2) {
            return 0;
        } else if ($number1 > $number2) {
            return 1;
        } else {
            return -1;
        }
    }
}

$validator = new Validator();

echo "COMP 1 : {$validator->compareValues(1, 2)} \n";
echo "COMP 2 : {$validator->compareValues(2, -6)} \n";
echo "COMP 3 : {$validator->compareValues(1, 1)} \n";
