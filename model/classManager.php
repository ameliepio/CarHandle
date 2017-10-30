<?php

class Manager {
  // Instance de PDO
  //attibuts bdd
  private $bd;

  public function __construct($bd) {
    $this->setDb($bd);
  }
// Methods
  public function setDb(PDO $bd) {
    $this->bd = $bd;
  }

// récupération de la liste des vehicules
// retrieve the list of vehicles
public function getVehicles()
  {

// requête qui va chercher les donnees dans la bdd
$q=$this->bd->query('SELECT * FROM vehicle');

// appel de la fonction hydrate
$donnees=$q->fetchAll();

  return $donnees;

 }
 // public function getVehicleById($id)
 // {
 //
 //
 //
 // }
}
