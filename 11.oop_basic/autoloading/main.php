<?php
//Autoload

// function __autoload($name){
//   if(!class_exists($name)){
//     require_once($name.'.php');
//   }
// }

// function __autoload($name){
//     include($name.'.php');
// }

function autoload($name){
  include($name.'.php');
}

spl_autoload_register('autoload');

(new Bike)->getType();
echo "\n";
(new SpaceShip)->lunch();


