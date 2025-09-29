<?php

echo '<pre>';

for($i=0; $i<=5; $i++)
{
    for($j=0; $j<=5; $j++)
    {
        echo '*';
    }
    echo '<br />';
}

echo '<hr /><br />';

echo '<pre>';

for($i=1; $i<=6; $i++)
{
    for($j=7 - $i; $j<=6; $j++)
    {
        echo '*';
    }
    echo '<br />';
}

for($i=1; $i<=6; $i++)
{
    for($j=1; $j<=7 - $i; $j++)
    {
        echo '*';
    }
    echo '<br />';
}

echo '<hr /><br />';

for($i=1; $i<=6; $i++)
{
    for($j=1; $j<=6 - $i; $j++)
    {
        echo ' ';
    }
    for($k=1; $k<= $i*2 - 1; $k++)
    {
        echo '*';
    }
    echo '<br />';
}