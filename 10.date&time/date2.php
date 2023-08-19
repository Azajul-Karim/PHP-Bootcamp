<?php

echo date("dS F, Y H:i:s A")."<br>";

echo date("z")."<br>";

echo date("t")."<br>";

//unix timestamp

echo time()."<br>";

date_default_timezone_set("Asia/Dhaka");

echo mktime(0,0,0,1,1,2019)."<br>";

echo strtotime("now")."<br>";

echo strtotime("tomorrow")."<br>";

echo (strtotime("+7days")-strtotime("now"))/(86400)."<br>";

echo strtotime("10 September 2000")."<br>";

echo strtotime("+1 week 2 days 4 hours 2 seconds")."<br>";


$d1 = new DateTime('2023-08-19');
$d2 = new DateTime('2006-11-10');

$diff = date_diff($d1,$d2);

echo $diff->format("%y Year %m Month %d Days")."<br>";

