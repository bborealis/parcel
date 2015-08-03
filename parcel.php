<?php
class Parcel
{
    private $length;
    private $height;
    private $width;
    private $weight;

    function __construct($box_length, $box_height, $box_width, $box_weight)
    {
      $this->length = $box_length;
      $this->height = $box_height;
      $this->width = $box_width;
      $this->weight = $box_weight;
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

  // $parcel_dimensions = array($length, $height, $width);

  function volume()
  {
    return $this->length * $this->height * $this->width;
  }

  function costToShip()
  {
    $total_volume = $this->volume();
    return $total_volume * $this->weight / 100000;
  }
}

$new_parcel = new Parcel($_GET["length"], $_GET["height"], $_GET["width"], $_GET["weight"]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcel Shipping Cost Homepage</title>
</head>
<body>
    <h1>Your Parcel Shipping Cost</h1>
    <ul>
      <?php
        $total_length = $new_parcel->getLength();
        $total_height = $new_parcel->getHeight();
        $total_width = $new_parcel->getWidth();
        $total_weight = $new_parcel->getWeight();
        $total_volume = $new_parcel->volume();
        $total_cost = $new_parcel->costToShip();
        echo "<li> Cost: $$total_cost </li>";
        echo "<li> Volume: $total_volume cubic inches  </li>";
        echo "<li> Dimensions: $total_length X $total_height X $total_width inches </li>";
        echo "<li> Weight: $total_weight pounds</li>";
      ?>
    </ul>
</body>
</html>
