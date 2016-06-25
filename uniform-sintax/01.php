<?php

class foo

{
  static $bar = 'baz';
}

class baz
{
  static $bat = 'Hello World';
}

baz::$bat = function () { echo "Hello World"; };

$foo = 'foo';

echo ($foo::$bar::$bat)();
