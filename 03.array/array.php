<?php
// array

$students = [
  'rahim',
  'karim',
  123,
  'monir'
];

// var_dump($student);


// array manupulatio
$names = array(
  "Rahim",
  "Karim",
  "Jahid",
  "Topu"
);

$name = array_pop($names);

$name = array_shift($names);

$name = array_push($names, "Kamal");

$name = array_unshift($names, "Jamal");

$n = count($names);
for ($i = 0; $i < $n; $i++) {
  echo $names[$i] . "\n";
}

echo PHP_EOL;
// associative array

$names = [
  "12" => "Rahim",
  "13" => "Karim",
  "14" => "Jahid",
  "15" => "Topu"
];

echo $names[12];

$foods = [
  "Vagetebles" => "Brinjal, Brocolli, Carrot, Capsicam",
  "Fruits" => "Orange, Banana, Apple",
  'Drinks' => "Water, Milk"
];

// echo $foods['Vagetebles'];

foreach ($foods as $key => $value) {
  echo $key . " = " . $value . "\n";
}
