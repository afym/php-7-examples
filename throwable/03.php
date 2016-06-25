<?php

declare(strict_types=1);

$sum = function(int $number)
{
  return $$number++;
};

try
{
   $sum('a');
}
catch (Error $t)
{
    echo "some error occurred";
}
