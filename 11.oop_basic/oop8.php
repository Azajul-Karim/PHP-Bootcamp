<?php
class MotorCycle{
  private $parameters;

  function __construct($displacement, $capacity, $mileage){
    $this->parameters['displacement'] = $displacement;
    $this->parameters['capacity'] = $capacity;
    $this->parameters['mileage'] = $mileage;
  }

  function __isset($name){
    if(!isset($this->parameters[$name])){
      echo "No such parameter: $name";
      return false;
    }else{
      return true;
    }
  }

  function __unset($name){
    echo "Unsetting $name";
    unset($this->parameters[$name]);
  }
  
  function __get($name){
    echo $this->parameters[$name];
  }

  function __set($name, $value){
    $this->parameters[$name] = $value;
  }

  function __call($name, $arguments){
    if($name == 'runTest'){
      echo "Running test with parameters: " . implode(', ', $arguments);
    }
  }   
}
$motorCycle = new MotorCycle(150, 5, 50);
echo "\n";
echo $motorCycle->displacement;

$motorCycle->run;