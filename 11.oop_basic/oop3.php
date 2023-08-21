<?php

#inheritance

class Animal{

  function eat(){
    echo "Eating...";
  }

  function sleep(){
    echo "Sleeping...";
  }

  function run(){
    echo "Running...";
  } 

}

class Human extends Animal{

  function read(){
    echo "Reading...";
  }

  function write(){
    echo "Writing...";
  }

}

class cat extends Animal{

  function meow(){
    echo "Meowing...";
  }

}

$human = new Human();
$human->eat();
echo "<br>";
$human->sleep();
echo "<br>";

$cat = new Cat();
$cat->eat();
echo "<br>";
$cat->meow();
echo "<br>";

//inheritance scope
class ParentClass{

  protected $name;
  function __construct($name){
    $this->name = $name;
    $this->sayHi();
  }

  function sayHi(){
    echo "Hi From {$this->name}"."<br>";
  }
}

class ChildClass extends ParentClass{

  function sayHi(){
    parent::sayHi();
    echo "Hi from child class"."<br>";
  }
}

$child = new ChildClass("Child");


//inheritance project

class Shape{

  protected $name;
  protected $area;

  function __construct($name){
    $this->name = $name;
    $this->calcArea();
  }

  function getArea(){
    echo "Area of {$this->name} is {$this->area}";
  }

  function calcArea(){
    //calculate area
  }

  function getName(){
    return $this->name;
  }

}

class Triangle extends Shape{

  private $a;
  private $b;
  private $c;

  function __construct($a, $b, $c){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    parent::__construct("Triangle");
  }

  function calcArea(){
   $perimeter = ($this->a + $this->b + $this->c) / 2;

    $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
  }

}

class Rectangle extends Shape{

  private $a;
  private $b;

  function __construct($a, $b){
    $this->a = $a;
    $this->b = $b;
    parent::__construct("Rectangle");
  }

  function calcArea(){
    $this->area = $this->a * $this->b;
  }
 
}

$rect = new Rectangle(5, 2);
$rect->getArea();

echo "<br>";

$tri = new Triangle(10, 12, 8);
$tri->getArea();