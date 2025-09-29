<?php

declare(strict_types=1);

$programmingLanguages = [
    'php',
    'python',
    'c++',
    'go',
    'java'
];

foreach($programmingLanguages as $key => $language)
{
    echo $key . ': ' . $language . '<br />';
}

// echo '<br />' . $language;

unset($language);

$user = [
    'name' => 'Jhon',
    'surname' => 'Snow',
    'email' => 'snowman',
    'skills' => [
        'php',
        'graphql',
        'react'
    ]
];

echo '<hr />';

foreach($user as $key => $value)
{
    if(is_array($value))
    {
        $value = implode(', ', $value);
    }
    echo $key . '=>' . $value . '<br />';
}

echo '<hr />';

foreach($user as $key => $value)
{
    if(is_array($value))
    {
        foreach($value as $skill)
        {
            echo $skill . ' ';
        }
    }
    else 
    {
        echo $value;
    }
    echo '<br />';
}