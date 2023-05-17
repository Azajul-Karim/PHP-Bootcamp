<?php
class RGB
{
  private $color;
  private $red;
  private $green;
  private $blue;

  function __construct($colorCode = '')
  {
    $this->color = ltrim("#", $colorCode);
  }

  function getColor()
  {
    return $this->color;
  }

  function setColor($colorCode)
  {
    $this->color = ltrim("#", $colorCode);
  }

  private function parseColor()
  {
    $colors = sscanf($this->color, '%02x');
  }
}
