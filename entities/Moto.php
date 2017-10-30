<?php

class Moto extends vehicle
{

    protected $twowheels;
    /**
     * Get the value of Twowheels
     *
     * @return mixed
     */

    public function getTwowheels()
    {
        return $this->twowheels;
    }
    /**
     * Set the value of Twowheels
     *
     * @param mixed twowheels
     *
     * @return self
     */

    public function setTwowheels($twowheels)
    {
        $this->twowheels = $twowheels;
        return $this;
    }
}
