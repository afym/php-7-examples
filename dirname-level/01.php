<?php

$dirPath = '/etc/php/7.0/cli';

$etcPath = dirname(dirname(dirname($dirPath)));

echo "{$etcPath} \n";
