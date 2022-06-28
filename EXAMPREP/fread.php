<?php
$file = fopen("test.txt","r");
$words = fread($file,"100");
fclose($file);
echo $words;

$x = (object) [
    'a' => 'test',
    'b' => 'test2',
    'c' => 'test3'
];
var_dump($x);
echo $x->a;
?>