<?php
//Function
function isEven($num)
{
  if ($num % 2 == 0) {
    return true;
  }
  return false;
}

$x = 23;

if (isEven($x)) {
  echo "{$x} Is An Even Number";
} else {
  echo "{$x} Is An Odd Number";
}

echo PHP_EOL;

//parameter type
function factorial(int $num)
{
  $result = 1;
  for ($i = $num; $i > 1; $i--) {
    $result *= $i;
  }
  return $result;
}

$x = 12;

echo "Factorial Of {$x} Is " . factorial($x);

echo PHP_EOL;

//parameter deafult Value
function serve($foodType = "Coffe", $numberOfItems = "1 Cup")
{
  echo "{$numberOfItems} Of {$foodType} Have Been Serve";
}

$ft = "Coffe";
$n = "2 Cups";

serve();

echo PHP_EOL;

// Return Type

function sum($x, $y, $z): int
{
  return $x + $y + $z;
}

echo sum(5, 6, 7);

echo PHP_EOL;

//Unlimited Argument
function sum1(int ...$number): int
{
  $result = 0;
  for ($i = 0; $i < count($number); $i++) {
    $result += $number[$i];
  }
  return $result;
}

echo sum1(5, 6, 7, 8, 9);

echo PHP_EOL;

// cleane function

function doTaskA()
{
  echo "Step A Done\n";
}

function doTaskB()
{
  echo "Step B Done\n";
}

function doTaskC()
{
  echo "Step C Done\n";
}
function doTheLargerTask()
{
  doTaskA();
  doTaskB();
  doTaskC();
}

doTheLargerTask();


//Recursion
function printN($i)
{
  if ($i >= 10) {
    return;
  }
  echo $i . "\n";
  $i++;
  printN($i);
}
// printN(0);

function printNumber($start, $end, $stepping = 1)
{
  if ($start > $end) {
    return;
  }
  echo $start . "\n";
  $start += $stepping;
  printNumber($start, $end, $stepping);
}

printNumber(21, 37, 2);


// Fibonacci 
function fibonacci($old, $new, $end)
{
  static $start;
  $start = $start ?? 1;

  if ($start > $end) {
    return;
  }
  $start++;

  echo $old . " ";
  $_temp = $old + $new;
  $old = $new;
  $new = $_temp;

  fibonacci($old, $new, $end);
}

fibonacci(0, 1, 10);

echo PHP_EOL;

function factorialTwo($n)
{
  if ($n <= 1) {
    return 1;
  }
  return $n * factorialTwo($n - 1);
}

echo factorialTwo(5);

echo PHP_EOL;

// Variable Scope
$name = "Topu";

function callName()
{
  global $name;
  echo $name;
}
callName();

echo PHP_EOL;

function doSomething()
{
  static $i; //static scope
  $i = $i ?? 0;
  $i++;
  echo $i;
  echo "\n";
}
doSomething();
doSomething();
doSomething();
