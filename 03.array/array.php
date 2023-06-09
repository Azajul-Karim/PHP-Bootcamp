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
// $fruits = array(
//   "Apple",
//   "Banana",
//   "Orange",
//   "Plum",
//   "Dates",
//   "Mango"
// );

// $someFruits = array_slice($fruits, 2);
// $someFruits = array_slice($fruits, 2, 3);
// $someFruits = array_slice($fruits, 2, -1);
// $someFruits = array_slice($fruits, -5, -1);
// $someFruits = array_slice($fruits, 3,  3, true);


// print_r($someFruits);
// print_r($fruits);


//Splice
// $someFruits = array_splice($fruits, 2, 2);

// $someFruits = array_splice($fruits, 2, -2);


// print_r($someFruits);
// print_r($fruits);


//Array Merge
// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_splice($fruits, 3);

// $newFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);


//Array Sort
$fruits = array(
  "Apple", "Banana", "Orange", "Plum", "Dates", "Mango"
);

$numbers = array(23, 4, 5, 6, 22, 12, 32, 45, 89, 0, 9, 8);

// sort($fruits);
// print_r($fruits);

// sort($numbers);
// print_r($numbers);

echo PHP_EOL;

// Array Search
if (in_array(89, $numbers)) {
  echo "56 is Found";
}

echo PHP_EOL;

$offset = array_search(89, $numbers);
// echo $offset;


//Walk
$numbers = array(23, 4, 5, 6, 22, 12, 32, 45, 89, 0, 9, 8);
sort($numbers);

function squre($n)
{
  printf("Squre Of %d Is %d \n", $n, $n * $n);
}

// array_walk($numbers, "squre");

//Map
function cube($n)
{
  return $n * $n * $n;
}

$newArr = array_map("cube", $numbers);

print_r($newArr);

//Filter
function even($n)
{
  return $n % 2 === 0;
}

$newFilter = array_filter($numbers, "even");

print_r($newFilter);


// Reduce

$numbers = array(1, 2, 3, 4, 5);

function sum($oldValue = 0, $newValue)
{
  return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum');
echo $sum;

echo PHP_EOL;
//List Function
$color = [122, 233, 65];
// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];

list($red, $green, $blue) = $color;

echo $green;

// Range Function
$numbers = range(12, 20, 2);

// print_r($numbers);

echo PHP_EOL;

//shuffle
$numbers = range(40, 72);

shuffle($numbers);

// print_r($numbers);

$randomNum = $numbers[3];
echo $randomNum;
