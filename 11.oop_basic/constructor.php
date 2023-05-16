<?php
class Human
{
  public $name;
  public $age;
  function __construct($personName, $personAge = 0)
  {
    // echo "New Human Object <br>";
    $this->name = $personName;
    $this->age = $personAge;
  }

  function sayHi()
  {
    echo "Hello <br>";
    $this->sayName();
  }

  function sayName()
  {
    if ($this->age) {
      echo "My Name Is {$this->name} , I Am {$this->age} Years Old .<br>";
    } else {
      echo "My Name Is {$this->name} , I Don't Know How Old I Am .<br>";
    }
  }
}

$h1 = new Human("Azajul", 23);
$h2 = new Human("Topu", 24);
$h3 = new Human("Rahi");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
