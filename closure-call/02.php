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

echo $closure->call($sandBox);
