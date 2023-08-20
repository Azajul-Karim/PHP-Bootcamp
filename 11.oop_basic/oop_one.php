<?php

//Class

class Human{
  public $name;

  function sayHi(){
    echo "Salam"."<br>";
    $this->getName();
  }

  function getName(){
    echo "My Name Is {$this->name}"."<br>";
  }
}

class Cat{
  function sayHi(){
    echo "Meow"."<br>";
  }
}

class Dog{
  function sayHi(){
    echo "Woof"."<br>";
  }
}


//Object

// $human = new Human();
// $human->name = "Rakib"; //Set Operation
// $human->sayHi();

// $human_Two = new Human();
// $human_Two->name = "Shakib "; 
// $human_Two->sayHi();

// echo $human->name."<br>"; //Get Operation
// $cat = new Cat();
// $dog = new Dog();
// $cat->sayHi();
// $dog->sayHi();


//Constructor

class HumanTwo{
  public $name;
  public $age;

  function __construct($personName, $personAge = 0){
    $this->name = $personName;
    $this->age = $personAge;
  }

  function sayHi(){
    echo "Salam"."<br>";
    $this->getName();
  }

  function getName(){
    if($this->age){
      echo "My Name Is {$this->name}\n I Am {$this->age} Years Old"."<br>";
    }else{
      echo "My Name Is {$this->name}\n I Don't Know How Old I Am"."<br>";
    }
  }
}

$human = new HumanTwo("Sakib", 20);
$human->sayHi();

$human_Two = new HumanTwo("Rakib", 25);
$human_Two->sayHi();

$human_Three = new HumanTwo("Josim");
$human_Three->sayHi();


//Public, Private, Protected

class Fund{
  private $fund;

  function __construct($initialFund = 0){
    $this->fund = $initialFund;
  }

  function addFund($amount){
    $this->fund += $amount;
    echo "Added {$amount} to fund"."<br>";

    $this->deductFund(0);
  }

  private function deductFund($amount){
    $this->fund -= $amount;
  }

  function getTotalFund(){
    echo "Total Fund: {$this->fund}"."<br>";
  }
}

$ourFund = new Fund(100);
$ourFund->getTotalFund();
$ourFund->addFund(10);
$ourFund->getTotalFund();
// $ourFund->deductFund(20);
$ourFund->getTotalFund();