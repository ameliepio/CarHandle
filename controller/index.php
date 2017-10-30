<?php
function my_autoloader($class){

include '../entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');

require '../model/connexion.php';
require_once ('../model/classManager.php');
require_once ('../model/Vehicle.php');



// je crée mon manager pour pouvoir me connecter a la base de donnée
$manager = new Manager($bdd);

// je recupere et j'affiche ma liste de vehicules
$vehicles=$manager->getVehicles();


//on  defini le vehicles  comme tbl

foreach ($vehicles as $key=>$value){
    $class = ucfirst($value['categories']);
    $vehicles[$key] = new $class($value);
    //var_dump($value);
}
//var_dump($vehicles);

require ('../vue/home.php');
