
<?php
class Student{
  function __construct($name, $age){
    $this->name = $name;
    if($age < 4){
      throw new Exception("Age must be greater than 4", 1001);
    }elseif($age > 30){
      throw new Exception("Age must be less than 30", 1002);
    }
    $this->age = $age;
  }

}

try{
  $s = new Student("Nazim", 31); 
  echo "Student created";
}catch(Exception $e){
  echo $e->getCode().": ".$e->getMessage() ;

}


