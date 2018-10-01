<?php

require __DIR__ . './../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;


$hello = new Hello();
$helloWorld = new SayHello();

echo $hello->talk();
echo $helloWorld->world();





?>

