<?php
//déclaration des attributs
// declaration of attributes
abstract
class Vehicle
{

    protected $id;

    protected $categories;

    protected $mark;

    protected $color;

    protected $price;

    protected $description;

    const MARKVEHICLE = array(
        'bmw',
        'audi',
        'citroen'
    );
    const COLORVEHICLE = array(
        'red',
        'white',
        'blue',
        'black'
    );
    // function contruct (maquette)
    // function contruct (model)

    public function __construct(array $valeurs)
    {
        $this->hydrate($valeurs);
    }
    // function hydratation qui appelle les setters

    public function hydrate(array $donnees)
    {
        // on fait une boucle avec le tableau de données

        foreach ($donnees as $key => $value)
        {
            // on récupère le nom des setters correspondants
            // si la clef est placesTotales son setter est setPlacesTotales
            // il suffit de mettre la 1ere lettre de key en Maj et de le préfixer par set
            $method = 'set' . ucfirst($key);
            // on vérifie que le setter correspondant existe

            if (method_exists($this, $method))
            {
                // si il existe, on l'appelle
                $this->$method($value);
            }
        }
    }
    /**
     * Get the value of Categories
     *
     * @return mixed
     */

    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set the value of Categories
     *
     * @param mixed categories
     *
     * @return self
     */

    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * Get the value of Mark
     *
     * @return mixed
     */

    public function getMark()
    {
        return $this->mark;
    }
    /**
     * Set the value of Mark
     *
     * @param mixed mark
     *
     * @return self
     */

    public function setMark($mark)
    {
        $this->mark = $mark;
        return $this;
    }
    /**
     * Get the value of Color
     *
     * @return mixed
     */

    public function getColor()
    {
        return $this->color;
    }
    /**
     * Set the value of Color
     *
     * @param mixed color
     *
     * @return self
     */

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    /**
     * Get the value of Price
     *
     * @return mixed
     */

    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set the value of Price
     *
     * @param mixed price
     *
     * @return self
     */

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

}
