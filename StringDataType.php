<?php

/* STRINGS */

$firstName = 'Falcon';
$lastName = 'Ola';

$name = $firstName . ' ' . $lastName;

echo $name . '<br />';

$name[15] = 'a';

var_dump($name);


$x = 1;
$y = 2;

// heredoc
$text = <<<TEXT
 HELLO WORLD
TEXT;

var_dump($text);

echo nl2br($text);

// Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 3 ' "
TEXT;

echo '<br />';
echo nl2br($text);