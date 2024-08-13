<?php

$luas=7;
const phi=3.14;
 
echo $luas;
echo "<br>";
echo phi;

$luasPersegiPanjang=67;
$kelilingPersegiPanjang=93.5;
$nama="apiip";
$hidup=true;
echo "<br>";

var_dump($luasPersegiPanjang);
var_dump($kelilingPersegiPanjang);
var_dump($nama);
var_dump($hidup);

$x = 5;
var_dump($x);
echo "<br>";
$x="hello world";
$y='halo dunia';

var_dump($x);
echo "<br>";
var_dump($y);

echo "<br>";
$x=10.365;
var_dump($x);

echo "<br>";
$x = 5985;
var_dump($x); 

print "<h2>example</h2>";

echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  