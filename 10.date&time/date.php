<?php
// echo time()."<br>";

// echo date('d M, Y')."<br>";

$startTime = microtime(true)."<br>";

factorial(1000);

$endTime = microtime(true)."<br>";

$executionTime = $endTime - $startTime;

printf("%10.8f",$executionTime)."<br>"; 

 function factorial($n){
     $result = 1;
      for($i = 1; $i <= $n; $i++){
          $result *= $i;
      }
      return $result;
 }

 