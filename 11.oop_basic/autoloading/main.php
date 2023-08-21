<?php
//Autoload

function __autoload($name){
  if(file_exists($name . '.php')){
    require_once $name . '.php';
  }
}