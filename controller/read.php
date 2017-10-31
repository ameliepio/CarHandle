<?php
function my_autoloader($class){

include '../entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');
include '../vue/header.php';

require '../model/connexion.php';
require_once ('../model/classManager.php');


// je crée mon manager pour pouvoir me connecter a la base de donnée
$manager = new Manager($bdd);

// création d'une variable display qui retourne de la base de donnée un vehicule dont l'id est = a la valeur de getid
$donnee=$manager->getVehicle($_GET['id']);

$class=ucfirst($donnee['categories']);

// var_dump($class);

$vehicle= new $class($donnee);

include '../vue/read.php';
require '../vue/footer.php';
