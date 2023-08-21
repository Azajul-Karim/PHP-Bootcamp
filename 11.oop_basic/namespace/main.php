<?php
namespace Astronomy;
include "planet.php";
include "bike.php";

$planet = new Planets\Planet();//Unqualified name

$planet = new \Astronomy\Planets\Planet();//Fully qualified name

$planet->getName();