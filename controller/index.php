<?php
function my_autoloader($class){

include '../entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');

require '../model/connexion.php';
require_once ('../model/classManager.php');




// je crée mon manager pour pouvoir me connecter a la base de donnée
// create my manager for connection bdd
$manager = new Manager($bdd);

// je recupere et j'affiche ma liste de vehicules
// I get back and I display my list of vehicles
$vehicles=$manager->getVehicles();


// on crée une boucle qui parcours l'objet
// create a loop that traverses the object

foreach ($vehicles as $key=>$value){
    $class = ucfirst($value['categories']);
    $vehicles[$key] = new $class($value);
    //var_dump($value);
}
//var_dump($vehicles);

require ('../vue/home.php');
