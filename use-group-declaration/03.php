<?php

require_once 'functions.php';

use function Foo\Bar\{makeIt};

$f = makeIt();

echo "F : {$f} \n";
