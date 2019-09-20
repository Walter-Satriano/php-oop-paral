<?php
  /*
    Date 3 dimensioni x, y, z:
    Area = 2 * (x * y + x * z + y * z)
    Volume = x * y * z
  */

  class Parallelepipedo {

    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z) {

      $this -> x = $x;
      $this -> y = $y;
      $this -> z = $z;
    }

    public function getArea() {

      $area = 2 * (($this -> x * $this -> y) + ($this -> x * $this -> z) + ($this -> y * $this -> y));
      return $area;
    }

    public function getVolume() {

      $volume = $this -> x * $this -> y * $this -> z;
      return $volume;
    }
  };

  $x1 = $_GET["x1"];
  $y1 = $_GET["y1"];
  $z1 = $_GET["z1"];

  $x2 = $_GET["x2"];
  $y2 = $_GET["y2"];
  $z2 = $_GET["z2"];

  $x3 = $_GET["x3"];
  $y3 = $_GET["y3"];
  $z3 = $_GET["z3"];


  $parallelepipedi = [
    new Parallelepipedo($x1, $y1, $z1),
    new Parallelepipedo($x2, $y2, $z2),
    new Parallelepipedo($x3, $y3, $z3)
  ];

  // $parallelepipedi = [
  //   new Parallelepipedo(14, 70, 30),
  //   new Parallelepipedo(10, 10, 10),
  //   new Parallelepipedo(27, 8, 40)
  // ];

  $sommaArea = 0;
  $sommaVolume = 0;
  foreach ($parallelepipedi as $parallelepipedo) {

    echo "PARALLELEPIPEDO: " . $parallelepipedo -> x . " x " . $parallelepipedo -> y . " x " . $parallelepipedo -> z . "<br>";
    echo "AREA: " . $parallelepipedo -> getArea() . " m2" . "<br>";
    echo "VOLUME: " . $parallelepipedo -> getVolume() . " m3" . "<br><br>";

    $sommaArea += $parallelepipedo -> getArea();
    $sommaVolume += $parallelepipedo -> getVolume();
  }

  echo "<br>SOMMA AREE: " . $sommaArea . " m2" . "<br>";
  echo "SOMMA VOLUMI: " . $sommaVolume . " m3";

?>
