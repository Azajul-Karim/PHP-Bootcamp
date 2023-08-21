<?php
//Object Cloning  

// class FavColor{
//   public $color;

//   function __construct($color){
//     $this->color = $color;
//   }

//   function setColor($color){
//     $this->color = $color;
//   }
// }

// $color1 = new FavColor('Red');
// $color2 = clone  $color1;

// $color2->setColor('Blue');

// print_r($color1);
// print_r($color2);

//Object To String Conversion

class FavColor{
  public $color;

  function __construct($color){
    $this->color = $color;
  }

  function setColor($color){
    $this->color = $color;
  }

  function __toString(){
    return "The favorite color is {$this->color}";
  }
}

$color1 = new FavColor('Red');
echo $color1;
echo "\n";


//Compare Objects

class Planet{
  public $name;

  function __construct($name){
    $this->name = $name;
  }
}

$planet1 = new Planet('Earth');
$planet2 = new Planet('Earth');
$planet3 = new Planet('Mars');



if($planet1 === $planet2){
  echo "Similar";
}else{
  echo "Not Similar";
}

echo "\n";

//Early Binding and Late Binding

class A{
  static function echoName(){
    // echo self::getName();
    echo static::getName();
  }

  static function getName(){
    return "A";
  }
}

class B extends A{
  static function getName(){
    return "B";
  }
}

B:: echoName();