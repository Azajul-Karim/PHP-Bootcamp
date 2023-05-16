<?php
class Human //This Is a Class
{
  function sayHi()
  {
    echo "Salam <br>";
  }
}

class Cat
{
  function sayHi()
  {
    echo "Meow <br>";
  }
}

class Dog
{
  function sayHi()
  {
    echo "Woof <br>";
  }
}

$h1 = new Human(); //This Is a Object
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$c1->sayHi();
$d1->sayHi();
