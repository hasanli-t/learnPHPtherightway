<?php

$programmingLanguage = [
    'PHP',
    'Java',
    'Python'
];

echo $programmingLanguage[0] ."\n";

$programmingLanguage[] = 'Go';

print_r($programmingLanguage);



if(isset($programmingLanguage[11])){
    echo $programmingLanguage[11] ."\n";
}else{
  echo "no such index in the array\n";
  echo "the max index in this array is " . (count($programmingLanguage) - 1) . "\n";
}
array_push($programmingLanguage, 'JavaScript', 'SQL');

print_r($programmingLanguage);

$students = [
    'Elie' => [
        'gender' => 'female',
        'age' => 25,
        'email' => 'lie@lie',
        'active' => true,
        'hobbies' => [
            [
                'tvShows' => false,
                'videoGames' => true,
                'football' => false,
            ]
        ],
        'notes' => [
            ['math' => 2.0],
            ['english' => 2.0],
            ['chemistry' => 1.0],
        ]
    ],
    'Joel' => [
        'gender' => 'male',
        'age' => 28,
        'email' => 'joel@joel',
        'active' => true,
        'hobbies' => [
            [
                'tvShows' => false,
                'videoGames' => false,
                'football' => true
            ]
        ],
        'notes' => [
            ['math' => 2.0],
            ['english' => 3.0],
            ['chemistry' => 1.0]
        ]
    ]
];

var_dump($students['Elie']['gender']);
var_dump($students['Elie']['hobbies'][0]['tvShows']);
var_dump($students['Elie']['notes'][1]['english']);




# NOTE: Don't use isset if the value is null, because it will return false

$array = [1, 2, null];
var_dump(isset($array[2])); # -> bool(false)

# Instead use array_key_exists

var_dump(array_key_exists(2, $array)); # bool(true)

