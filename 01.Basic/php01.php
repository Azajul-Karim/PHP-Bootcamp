<?php
//Variable
// $name = 'Bangledesh';
// $age = 123;
// $myname = 'Azajul Karim';
// $myName = 'Azajul Karim';
// $my_name = 'Azajul Karim';
// $MyName = 'Azajul Karim';

$name = 'Bangledesh';
$age = 123;
$question = "How Are You";

$word = 'age';
echo $word; //age
echo "\n";
echo $$word; //16
echo "\n";

echo 'Hello ' . $name; //Hello Bangledesh
echo "\n";
echo "Hello $name"; //Hello Bangledesh
echo "\n";
echo "Hello {$name}, {$question}."; //Hello Bangledesh, How Are You.

echo "\n";

$task = 'Read';
echo $task; //Read
echo "\n";
$task = 'Write';
echo $task; //Write
echo "\n";


define('PI', 3.14179);
echo "Value Of PI = " . PI; //Value Of PI = 3.14179
echo "\n";
echo constant('PI'); //3.14179
echo "\n";

//Calculating The Value Of PI
$constant = "constant";
echo "Value Of PI = {$constant('PI')}"; //Value Of PI = 3.14179
echo "\n";

//Type
/*
Integer / int
Double / Float
Boolean 
Null
String
Array
Object
Resource
*/

//Output Print
$name = "Earth";
var_dump($name); //string(5) "Earth"

$name1 = 'Azajul';
$name2 = 'Karim';
var_dump($name1, $name2); //string(6) "Azajul", string(5) "Karim"

$uname = strtoupper($name);
echo "We're living on {$uname}\n"; //We're living on EARTH

printf("We're living on %s \n", $name); //We're living on Earth 

$fName = "Azajul";
$lName = "Karim";
printf("My Name Is %s %s \n", $fName, $lName); //My Name Is Azajul Karim


//Arithmetic Operator
$number = 12;
// $number = $number + 13;
$number += 13; //25 
$number = $number - 6; //6
$number = $number * 6; //72
$number = $number / 6; // 2
$number = $number % 6; //0

echo $number;
echo "\n";

$a = 7;
$a++;
echo $a;
echo "\n";

$b = 9;
$b--;
echo $b;
echo "\n";



//Number System
$n = 12;
$o = 012;
$h = 0x2B;

// printf("The Number Is %d and %d and %d , $n, $o, $h);

printf("The Binary Equivalent Of %d is %b \n", 12, 12); //The Binary Equivalent Of 12 is 1100 

printf("The Hexadecimal Equivalent Of %d is %x \n", 1212, 1212); //The Hexadecimal Equivalent Of 1212 is 4bc 

printf("The Octal Equivalent Of %d is %o \n", 1212, 1212); //The Octal Equivalent Of 1212 is 2274 


//PrintF
$fName = "Azajul";
$lName = "Karim";

// printf("My Name Is %s %s \n", $fName, $lName);

printf('My Name Is %2$s %1$s ', $fName, $lName); //My Name Is Karim Azajul 
echo "\n";

printf('The Binary Equivalent Of %1$d is %1$b', 12); //The Binary Equivalent Of 12 is 1100 

echo "\n";

$n = 45.2345;
printf("%.2f", $n); //45.23
echo "\n";

$m = 123;
$n = 27;
printf("%04d \n", $m); //0123
printf("%04d \n", $n); //0027

$output = sprintf("My Name Is %s %s \n", $fName, $lName);

echo strtoupper($output);


//Logical Operator
/*
==
!=
>
<
>=
<=
*/

$n = 13;

if ($n % 2 == 0) {
  echo "$n Is An Even Number";
} else {
  echo "$n Is An Odd Number";
}
