<?php
//Interface

interface BaseAnimal{
  function isAlive();
  function canEat($param1, $param2);
  function breed();
}

class Animal implements BaseAnimal{
  function isAlive(){
    echo "Yes";
  }

  function canEat($param1, $param2){
    echo "Yes";
  }

  function breed(){
    echo "Yes";
  }
}

interface BaseHuman extends BaseAnimal{
  function canTalk();
  function canRun();
}

class Human implements BaseHuman{
  function isAlive(){
    echo "Yes";
  }

  function canEat($param1, $param2){
    echo "Yes";
  }

  function breed(){
    echo "Yes";
  }

  function canTalk(){
    echo "Yes";
  }

  function canRun(){
    echo "Yes";
  }
}

$animal = new Animal();
$animal->isAlive();

$human = new Human();
echo $human instanceof BaseHuman;
echo "<br>";

//Static method

class MathCalculator{
  private $number;
  static $name;

  static function fibonacci($n){
    self::doSomething();
    // self::$name = 12;
    echo "Fibonacci Series Up To ".$n."<br>";
  }

  static function doSomething(){
    echo "Do Something", "<br>";
  }

  function factorial($n){
    $this->number = 12;
    echo "Factorial of ".$n."<br>";
  }
}

$math = new MathCalculator();
echo $math->fibonacci(5)."<br>";

// echo MathCalculator::fibonacci(5)."<br>";