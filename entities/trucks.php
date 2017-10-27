<?php

class trucks extends vehicle
{

    protected $sixwheels;
    // public function __construct($valeurs){
    //
    // parent::__construct($valeurs);
    //
    // $this->setSixwheels($sixwheels);
    //
    // }

    /**
     * Get the value of Sixwheels
     *
     * @return mixed
     */

    public function getSixwheels()
    {
        return $this->sixwheels;
    }
    /**
     * Set the value of Sixwheels
     *
     * @param mixed sixwheels
     *
     * @return self
     */

    public function setSixwheels($sixwheels)
    {
        $this->sixwheels = $sixwheels;
        return $this;
    }
}
