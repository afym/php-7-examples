<?php

function sum(float ...$numbers) : float
{
    return array_sum($numbers);
}

try {
    $total = sum(3, 4, null);
} catch (TypeError $t) {
    //echo $t->getMessage();
    echo "Some error";
}
