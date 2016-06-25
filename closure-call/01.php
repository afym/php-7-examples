<?php

class SandBox
{
    private $code = 'ABC522';
}

$closure = function()
{
    return "{$this->code}\n";
};

$sandBox = new SandBox();

$c1 = $closure->bindTo($sandBox, 'SandBox');

echo $c1();
