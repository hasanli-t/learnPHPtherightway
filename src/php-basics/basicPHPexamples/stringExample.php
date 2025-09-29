<?php

declare(strict_types=1)

$lineNumber = "I am the next line";
$someBigText = <<<TEXT
Hello world!
what is going on here?
How are you?
next line here
$lineNumber
TEXT;
echo $someBigText . "\n";