<?php

//** LOOPS */

// while
$i = 0;
while ($i <= 15):
    if ($i % 2 === 0) {
        $i++;

        continue;
    }

    echo $i++ . ',';
endwhile;

//do-white
$i = 0;
do {
    echo $i++;
} while ($i <= 15);

// for
$text = ['a', 'b', 'c', 'd'];
for ($i = 0; $i < count($text); $i++) {
    echo $text[$i] . '<br />';
}

for ($i = 0; print $i, $i < 15; $i++) {
//    echo $i;
}

// foreach

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => $language) {
    echo $key . ':' . $language . '<br />';
}

unset($language);

$language = 'php';

print_r($programmingLanguages);

$user = [
    'name' => 'Olamide',
    'email' => 'glo@email.com',
    'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value):
    if (is_array($value)) {
        $value = implode(',', $value);
    }

    echo $key . ': ' . $value. '<br />';
endforeach;

for ($i = 0; $i < 10; $i++):
    echo $i . '<br />';
endfor;
