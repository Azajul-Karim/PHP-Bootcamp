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
echo ord('A');
echo "\n";
echo ord('a');
echo PHP_EOL;
echo chr(98);
