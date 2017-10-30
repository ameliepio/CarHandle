<?php

class Car extends Vehicle{

protected $fourwheels;

    /**
     * Get the value of Fourwheels
     *
     * @return mixed
     */
    public function getFourwheels()
    {
        return $this->fourwheels;
    }

    /**
     * Set the value of Fourwheels
     *
     * @param mixed fourwheels
     *
     * @return self
     */
    public function setFourwheels($fourwheels)
    {
        $this->fourwheels = $fourwheels;

        return $this;
    }

}
