<?php
function my_autoloader($class){

require '../entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');

require '../model/connexion.php';
// require_once ('../model/classManager.php');
require_once ('../model/vehiclesManager.php');

// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new vehiclesManager($bdd);

// si on rempli le formulaire
// if you fill in the form
if (isset($_POST['Categories']) AND isset($_POST['Mark']) AND isset($_POST['Color']) AND isset($_POST['Price'])){
//on crée un objet
// create an object
  $vehicle =new $_POST['Categories']($_POST);
// inserer mon vehicule crée en bdd
// insert my vehicle created in bdd
$manager->add($vehicle);
}
include '../vue/add.php';
