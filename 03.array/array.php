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

// echo $names[12];

$foods = [
  "Vagetebles" => "Brinjal, Brocolli, Carrot, Capsicam",
  "Fruits" => "Orange, Banana, Apple",
  'Drinks' => "Water, Milk"
];

// echo $foods['Vagetebles'];

foreach ($foods as $key => $value) {
  echo $key . " = " . $value . "\n";
}


//String To Array 

$Vagetebles = explode(', ', "Brinjal, Brocolli, Carrot, Capsicam");

// var_dump($Vagetebles);


//Array To String
$VageteblesString = join(", ", $Vagetebles);

// echo $VageteblesString;

// Nested Array

$foods = [
  "Vagetebles" => explode(", ", "Brinjal, Brocolli, Carrot, Capsicam"),
  "Fruits" => explode(", ", "Orange, Banana, Apple"),
  'Drinks' => explode(", ", "Water, Milk")
];

// print_r($foods);

array_push($foods['Drinks'], 'orange juice');

// print_r($foods);


// Associative Array
$student = array(
  'fName' => 'Azajul',
  'lName' => 'Karim',
  'age' => '23',
  'class' => 12,
  'section' => 'A'
);

// print_r($student);

// printf("%s %s \n", $student["fName"], $student["lName"]);

$serialized = serialize($student);

// echo $serialized;
echo "\n";
$newStudent = unserialize($serialized);

// print_r($newStudent);

$jsonData = json_encode($student);
// echo $jsonData;

$student2 = json_decode($jsonData);
// print_r($student2);


//Copy By Value 

$person = array(
  'fName' => 'Hello',
  'lName' => 'World',
);

// $newPerson = $person;
$newPerson = $person;
$newPerson['lName'] = "Plutu";

print_r($person);
print_r($newPerson);


// Copy By Referance

function printData($person)
{
  $person['fName'] = "Change";
  print_r($person);
}

printData($person);
print_r($person);

//Data Remover

unset($person['lName']);
print_r($person);

// isset

$name1;

if (isset($name1)) {
  echo "Name Is Set";
} else {
  echo "Not Set";
}
echo "\n";

if (empty($name1)) {
  echo "Name Is Empty";
} else {
  echo "NoT Empty";
}

echo "\n";

if (isset($name1) && (is_numeric($name1) || $name1 != '')) {
  echo "Name Is Set And It's Not Empty";
} else {
  echo "Name Is Either Not Set Or it's Empty";
}


// Data Extract
