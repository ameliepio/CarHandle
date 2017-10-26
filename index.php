<?php
require 'entities/vehicle.php';
require 'entities/moto.php';


$data = ["categories" => "Moto",
          "mark" => "suziki",
          "color" => "blue",
          "price" => 1500,
          "twowheels" => 2
];
$moto = new Moto($data);
var_dump($moto);
