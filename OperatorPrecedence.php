<?php

/* Operator Precedence & Associativity */
$x = 5 + 3 * 5;

echo $x;


$x = (5 + 3) * 5;

echo $x;


$x = 5;
$y = 2;
$z = 10;

$result = $x / $y * $z;

$x = true;
$y = false;

var_dump($x && ! $y);

$x = true;
$y = false;
$z = true;

var_dump($x && $y || $z);

$x = true;
$y = false;

$z = $x && $y;
var_dump($z);

$x = true;
$y = false;

$z = $x and $y;

var_dump($z);