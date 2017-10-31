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
    // function qui modifie le vehicule en bdd via le Manager
    //function that update the vehicle in bdd via the Manager
     function update($vehicle) {
        $q = $this->bd->prepare('UPDATE vehicle SET categories=: categories,:mark=mark,:color=color,:price=price,:description=description)');
                  $q->bindValue(':categories',$vehicle->getCategories(), PDO::PARAM_STR);
                  $q->bindValue(':mark', $vehicle->getMark(), PDO::PARAM_INT);
                  $q->bindValue(':color', $vehicle->getColor(), PDO::PARAM_STR);
                  $q->bindValue(':price', $vehicle->getPrice(), PDO::PARAM_STR);
                   $q->bindValue(':description', $vehicle->getDescription(), PDO::PARAM_STR);
    $q->execute();
    }

    public function delete($vehicle)

    {

      $this->bd->execute('DELETE FROM vehicle WHERE id = '.$vehicle->id());

    }
}
