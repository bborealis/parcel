<?php
class Parcel
{
    private $length;
    private $height;
    private $width;
    private $weight;
    private $cost;

    function __construct($box_length, $box_height, $box_width, $box_weight, $box_cost)
    {
      $this->length = $box_length;
      $this->height = $box_height;
      $this->width = $box_width;
      $this->weight = $box_weight;
      $this->cost = $box_cost;
    }

    function getLength()
    {
      return $this->length;
    }

    function getHeight()
    {
      return $this->height;
    }

    function getWidth()
    {
      return $this->width;
    }

    function getWeight()
    {
      return $this->weight;
    }

    function getCost()
    {
      return $this->cost;
    }

    function setLength($new_length)
    {
      $this->length = (integer) $new_length;
    }

    function setHeight($new_height)
    {
      $this->height = (integer) $new_height;
    }

    function setWidth($new_width)
    {
      $this->width = (integer) $new_width;
    }

    function setWeight($new_weight)
    {
      $this->weight = (integer) $new_weight;
    }

    function setCost($new_cost)
    {
      $this->cost = (float) $new_cost;
    }
}
  $parcel_sides = array($length, $height, $width);

  function volume($parcel_sides)
  {
    return getLength() * getWidth() * getHeight();
  }


?>
