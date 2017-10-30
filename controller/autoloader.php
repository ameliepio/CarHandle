<?php


function my_autoloader($class){

include 'entities/'.$class.'.php';
}
spl_autoload_register('my_autoloader');

//require 'index.php';

?>
