<?php

require_once 'A.php';
require_once 'B.php';

use Foo\Bar\{A, B};

$va = A::VA;
$vb = B::VB;

echo "VA : {$va} \n";
echo "VB : {$vb} \n";
