<?php

class Student{
  private $name;
  private $age;
  private $class;

  function __construct($name = '', $age = '', $class = ''){
    $this->name = $name;
    $this->age = $age;
    $this->class = $class;
  }

  // function getName(){
  //   return $this->name;
  // }

  // function setName($name){
  //   $this->name = $name;
  // }

  // function getAge(){
  //   return $this->age;
  // }

  // function setAge($age){
  //   $this->age = $age;
  // }

  // function getClass(){
  //   return $this->class;
  // }

  // function setClass($class){
  //   $this->class = $class;
  // }

  function __get($property){
    return $this->$property;
  }

  function __set($property, $value){
    $this->$property = $value;
  }
}

$student = new Student('', 20, '12A');

$student->name="Topu";
echo $student->name . "<br>";


//interface practice

class DistrictCollection implements IteratorAggregate, Countable{

  private $districts;

  function __construct(){
    $this->districts = array();
  }

  function add($district){
    array_push($this->districts, $district);
  }

  function getDistricts(){
    return $this->districts;
  }

  function getIterator(){
    return new ArrayIterator($this->districts);
  }

  function count(){
   
    return count($this->districts);
  }
}

$districtCollection = new DistrictCollection();
$districtCollection->add("Dhaka");
$districtCollection->add("Rajshahi");
$districtCollection->add("Khulna");
$districtCollection->add("Sylhet");
$districtCollection->add("Barishal");

foreach($districtCollection as $district){
  echo $district."<br>";
}

echo count($districtCollection);