<?php
//Abstraction

// abstract class Shape{

//  abstract function getArea();
//  abstract function getPerimeter();
// }

// class Rectangle extends Shape{
//   private $base;
//   private $height;

//   function __construct($base, $height){
//     $this->base = $base;
//     $this->height = $height;
//   }

//   function setBase($base){
//     $this->base = $base;
//   }

//   function setHeight($height){
//     $this->height = $height;
//   }

//   function getArea(){
//     return $this->base * $this->height;
//   }

//   function getPerimeter(){
//     return 2 * ($this->base + $this->height);
//   }
// }

// class Triangle extends Shape{
  
//   function getArea()
//   {
    
//   }

//   function getPerimeter()
//   {
    
//   }
  
// }

// $rectangle = new Rectangle(10, 20);
// echo $rectangle->getArea();
// echo "<br>";



//Fainal keyword

// abstract class OurClass{
//   final function ourFunction(){
//     echo "Our Class";
//   }
// }

// class MyClass extends OurClass{
//   // function ourFunction(){
//   //   echo "My Class";
//   // }
// }

// $myclass = new MyClass();
// $myclass->ourFunction();
// echo "<br>";

//forcefully inheritanc
class Shape{

}

class Shapes{
  private $shapes;

  function __construct(){
    $this->shapes = array();
  }

  function addShape(Shape $shape){
    array_push($this->shapes, $shape);
  }

  function totalShapes(){
    return count($this->shapes);
  }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Student{

}

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle(3,5));
$shapesCollection->addShape(new Triangle(14,13,34));
// $shapesCollection->addShape(new Student());

echo $shapesCollection->totalShapes();