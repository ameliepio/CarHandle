<?php
function my_autoloader($class){

include '../entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');
include '../vue/header.php';

require '../model/connexion.php';
require_once ('../model/vehiclesManager.php');


// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new vehiclesManager($bdd);

// création d'une variable display qui retourne de la base de donnée un vehicule dont l'id est = a la valeur de getid
// create a display variable that returns from the database a vehicle whose is = the value of getid
$donnee=$manager->getVehicle($_GET['id']);

$class=ucfirst($donnee['categories']);

//create objet
$vehicle= new $class($donnee);

include '../vue/read.php';
require '../vue/footer.php';
