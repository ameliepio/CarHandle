<?php

 abstract class vehicle{

protected $categories;

protected $mark;

protected $color;

protected $price;



public function __construct($categories,$mark,$color,$price){

$this->setCategories($categories);
$this->setMark($mark);
$this->setColor($color);
$this->setPrice($price);
}

}
