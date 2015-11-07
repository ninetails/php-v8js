<?php
ini_set("v8js.flags", "--harmony");
require './react-php-v8js/ReactJS.php';

$react = file_get_contents('https://fb.me/react-0.13.0.min.js');
$component = file_get_contents('./simple.js');

$rjs = new ReactJS($react, $component);
$rjs->setComponent('Simple');

echo $rjs->getMarkup();
echo "\n\n";
