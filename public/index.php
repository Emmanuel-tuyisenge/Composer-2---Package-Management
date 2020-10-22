<?php
require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;


//$sentence = new \App\Wcs\Hello();
//echo $sentence->talk();

$sentence2 = new SayHello();
echo $sentence2->world();