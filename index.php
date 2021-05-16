<?php
include_once "Shape/Triangle.php";


$sides = [
    "side1" => 1,
    "side2" => 1,
    "side3" => 2
];
$triangle = new Triangle("triangle", $sides);

//echo $triangle->defaultTriangle();
echo "<br>";
echo $triangle;