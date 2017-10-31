<?php

class vehiclesManager
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

    // function qui ajoute le vehicule a la bdd via le Manager
    //function that adds the vehicle to the bdd via the Manager
     function add($vehicle) {
        $q = $this->bd->prepare('INSERT INTO vehicle(categories,mark,color,price)
                                   VALUES (:categories, :mark, :color,:price)');
                  $q->bindValue(':categories',$vehicle->getCategories(), PDO::PARAM_STR);
                  $q->bindValue(':mark', $vehicle->getMark(), PDO::PARAM_INT);
                  $q->bindValue(':color', $vehicle->getColor(), PDO::PARAM_STR);
                  $q->bindValue(':price', $vehicle->getPrice(), PDO::PARAM_STR);


    $q->execute();
    }


}
