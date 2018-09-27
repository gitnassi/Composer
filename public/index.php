<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$SayHello = new Hello();
$SayHello->talk();

$Say2 = new SayHello();

$HiWorld = $Say2->world();

echo $HiWorld;

