<?php

class Manager
{
    // Instance de PDO
    //attibuts bdd

    private $bd;

    public function __construct($bd)
    {
        $this->setDb($bd);
    }
    // Methods

    public function setDb(PDO $bd)
    {
        $this->bd = $bd;
    }
    // récupération de la liste des vehicules
    // retrieve the list of vehicles

    public function getVehicles()
    {
        // requête qui va chercher les donnees dans la bdd
        // query that will look for the data in the database
        $q = $this->bd->query('SELECT * FROM vehicle ');
        // appel de la fonction hydrate
        //call hydrate function
        $donnees = $q->fetchAll();
        return $donnees;
    }
    // function qui va chercher en bdd par l'id
    // function that will search in bdd by the id

    public function getVehicle($id)
    {
        $q = $this->bd->prepare('SELECT * FROM vehicle WHERE id = :id');
        $q->execute(array(
	'id' =>$id
    ));
        $donnees = $q->fetch();
        return $donnees;
}
}
