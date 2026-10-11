<?php

/* BOOLEAN */

$isComplete = (string) true;

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump($isComplete);

if ($isComplete) {
    // do something
      echo 'success';
} else {
    // do something else
//    echo 'fail';
}