<?php

declare(strict_types=1);

class Math {
    public function add(int $number1, int $number2) : int {
        return "222";
    }
}

$math = new Math();

echo "SUM 1 : {$math->add(1, 10)} \n";
echo "SUM 2 : {$math->add(22, 10)} \n";
