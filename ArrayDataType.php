<?php

// ARRAYS
$programmingLanguage1 = 'PHP';
$programmingLanguage2 = 'JAVA';
$programmingLanguage3 = 'Python';

$programmingLanguages = ['PHP', 'JAVA', 'Python'];

$name = 'Falcon';

echo $programmingLanguages[1];

var_dump (isset($programmingLanguages[3]));

$programmingLanguages[1] = 'C++';

echo $programmingLanguages[1];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br />';

array_push($programmingLanguages, 'C++', 'C', 'GO');
$programmingLanguages[] = 'C++';


echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);


var_dump($programmingLanguages['php']);

$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php'];

$newLanguage = 'go';

$programmingLanguages[$newLanguage] = '1.15';


echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',              
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',              
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ],
    ],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']['versions'][0]['releaseDate'];

$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];

print_r($array);

echo $array[null];

$array = ['a', 'b', 50 => 'c', 'd', 'e'];

unset($array[50], $array[1]);


echo '<pre>';
print_r($array);
echo '</pre>';

$array  = [1, 2, 3];

unset($array[0], $array[1], $array[2]);

$array[] = 1;

print_r($array);


$x = 5;

var_dump((array) $x);

$array = ['a' =>1, 'b' => null];

var_dump(array_key_exists('b', $array));

var_dump(isset($array['b']));