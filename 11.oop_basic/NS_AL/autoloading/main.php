<?php
namespace CloudStorage;
// include "mail.php";

spl_autoload_register(function($name){
  $path = strtolower(str_replace("CloudStorage\\", "", $name)).".php";
  $path = str_replace("\\", "/", $path);
  include($path);
});

use CloudStorage\Mail as Mail;
class Main{
  function __construct(){
    $mail = new Mail\Mail();
    $mail->sendMail();
  }
}

new Main();

//Exception
