<?php
// $filename = "C:\xampp\htdocs\php_hasin\07.File\f1.txt";

// echo getcwd();

$fp = fopen('f1.txt', 'r');
// $line = fgets($fp);
// echo $line;
// $line = fgets($fp);
// echo $line;
// $line = fgets($fp);
// echo $line;
// $line = fgets($fp);
// echo $line;
// fclose($fp);

while ($line = fgets($fp)) {
  echo $line;
}
rewind($fp);
fseek($fp, -1, SEEK_END);
echo "<br>";
while ($line = fgets($fp)) {
  echo $line;
}
fclose($fp);

$data = file('f1.txt');
echo $data[2];
print_r($data);

echo "<br>";

$data = file_get_contents('f1.txt');
echo $data;
