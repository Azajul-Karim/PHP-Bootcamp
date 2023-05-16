<?php
class Human
{
  public $name;

  function __construct()
  {
    echo "New Human";
  }
  function sayHi()
  {
    echo "Salam <br>";
    $this->sayName();
  }

  function sayName()
  {
    echo "My Name Is {$this->name}";
  }
}

$h1 = new Human();
$h1->sayHi();
