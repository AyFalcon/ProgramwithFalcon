<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)
$x = -10;
$y = 3;

var_dump($x % $y);

// Assignment Operators (= += -= *= /= %= **=)
$x = $y = 10;

var_dump($x, $y);

$x = 5;

$x += 3;

echo $x;
//  String Operators (. *=)
$x = 'Hello';

$x .= ' World';

echo $x;

// Comparison Operators (= == != <> !== < > <= >= <=> ?? ?:)
$x = 10;
$y = '10';

var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
var_dump($x < $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);
var_dump($x <=> $y);
var_dump(0 == 'hello');
var_dump(0 == '0');

$x = 'Hello World';
$y = strpos($x, 'H');

$result = $y === false ? 'H Not Found' : 'H Found at Index' . $y;

echo $result;
if ($y === false) {
    echo 'H Not Found';
} else {
    echo 'H Found at Index' . $y;
}
$x = null;
$y = $x ?? 'Hello';

var_dump($y);


// Error Control Operators (@)
$x = @file('foo.txt');

// Increment/Decrement Operators (++, --)
$x = 5;

echo ++$x;
echo $x;

$x = 'abc';

echo ++$x;

// Logical Operators (&& || ! and or xor)
$x = 1;
$y = 0;

var_dump($x && $y);


$x = 0;
$y = false;

var_dump(!$x || $y);

$x = true;
$y = false;

$z = $x and $y;

$x = true;
$y = false;

function hello() {
    echo 'Hello World';

    return false;
}

var_dump($x && hello() || true);


// Bitwise Operators (& | ^ ~ << >>)
$x = 6;
$y = 3;

// 110
// ~
// 001
// &
// 011
// ----
//001 = 1

var_dump(~$x & $y);

$x = 6;
$y = 3;

// 110
// <<<
// 110000 = 48

var_dump($x << $y);

$x = 6;
$y = 1;

// 110
// >>
// 11

var_dump($x >> $y);

// Array Operators (+ == === != <> !==)
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h'];

$z = $x + $y;

print_r($z);

$x = ['a' =>1, 'b' =>2, 'c' =>3];
$y = ['d' =>4, 'e' =>5, 'f' =>6, 'g' =>7, 'h' =>8];

$z = $x + $y;

print_r($z);

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 1, 'd' => 3, 'b' => 2];

$z = $x == $y;

var_dump($z);

// Execustion Operators ('')

//Type Operators (instanceof)

//Nullsafe Operaators - PHPB (?)