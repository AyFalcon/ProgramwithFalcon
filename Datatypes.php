<?php

/* Data Types Casting */

#  4 Scalar Types
    # bool - true / false
    $completed = true;
    # int - 1, 2, 3, 0, -5 (no decimal)
    $score = '75';
    # float - 1.5, 0.1, 0.005, -15.8
    $price = 0.99;
    # string - "Gio", "Hello World"
    $greeting = 'Hello Falcon';

    var_dump($score);

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

    var_dump($score);
    
# 4 Compoundd Types
    # array
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    print_r($companies);
    # object
    # callable
    # iterable

# 2 Special Types
    # resources
    # null (means no value or nothing)


function sum(int $x, int $y) {
    $x = 5.5;
    var_dump($x, $y);
    echo '<br />';
     return $x + $y;
}

$sum = sum(2, 3);

echo $sum . '<br />';

var_dump($sum);


$x = (int)'5';

var_dump($x);