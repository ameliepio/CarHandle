<?php
require '../model/connexion.php';
require_once('../model/classManager.php');
require_once('../model/vehicle.php');

// je crée mon manager pour pouvoir me connecter a la base de donnée
$manager = new Manager($bdd);
//on crée un vehicule
//$vehicle =new Vehicle;
// je recupere et j'affiche ma liste de vehicules
$id = $_GET['id'];
$vehicle=$manager->getVehicleById($id);
// foreach sur $vehicule
    // transfome le value en objet


// require('../vue/read.php');
