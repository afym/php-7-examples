<?php

class GeneratorClass
{
    public function gen1()
    {
        yield 1;
        yield 2;
        yield 3;
        yield 4;
        yield from $this->extraGen();
        return 233;
    }

    public function extraGen()
    {
        yield 2;
        yield 10;
        yield 22;
    }
}

$generator = new GeneratorClass();

$iterate = $generator->gen1();

foreach ($iterate as $item) {
    echo "{$item}  \n";
}

echo "{$iterate->getReturn()} \n";
