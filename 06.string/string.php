<?php
$name = "Topu";

$string01 = "My Name Is $name \n";
echo $string01;


$heredoc = <<<EOD
Data 1
New Line {$name} 
More Text
EOD;
echo $heredoc;


//ASCII
// echo ord('A');
echo "\n";
// echo ord('a');
echo PHP_EOL;
// echo chr(98);


$string = "Hello World";
// echo $string[0];
// echo $string[-5];
$length = strlen($string);
echo substr($string, $length - 3);
echo PHP_EOL;
echo substr($string, -7, 3);
