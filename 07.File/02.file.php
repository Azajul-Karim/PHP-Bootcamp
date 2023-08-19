<?php
$filename = 'C:\\xampp\\htdocs\\php_hasin\\07.File\\f2.txt';

// echo getcwd() . "\n";
// $fp = fopen($filename, 'r+');
// $fp = fopen($filename, 'a');
// fwrite($fp, "Hello\n");
// fwrite($fp, "World\n");
// fwrite($fp, "World\n");
// fclose($fp);


//file open r+
// $line = fgets($fp);
// echo $line;
// fwrite($fp, "Earth\n");
// $line = fgets($fp);
// echo $line;
// fclose($fp);


// file_put_contents($filename, "Earth\n", FILE_APPEND);
// file_put_contents($filename, "jupiter\n", FILE_APPEND);


$students = array(
  array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age' => 12,
    'class' => 7,
    'roll' => 11
  ),
  array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => 13,
    'class' => 8,
    'roll' => 12
  ),
  array(
    'fname' => 'Ripon',
    'lname' => 'Ahmed',
    'age' => 14,
    'class' => 9,
    'roll' => 13
  ),
);
/*
$fp = fopen($filename, "w");
foreach ($students as $student) {
  // fputcsv($fp, $student);
  $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
  fwrite($fp, $data);
}
fclose($fp);
*/


// $fp = fopen($filename, "r");
// while ($student = fgetcsv($fp)) {

//   printf("Name: %s %s\nAge: %s\nClass: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// }
