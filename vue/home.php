<?php
require 'header.php';

?>

<div id="main" class="container-fluid">
    <h3 class="page-header"></h3>

<form class="" action="index.php" method="post">
        <div id="actions">
            <div class="col-md-3">
                <a href="add.php" class="btn btn-outline-success">Add vehicle</a>
            </div>
        </div>
        <div id="list" class="row">
    <div class="table-responsive col-xs-8 .col-sm-6  ">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Categories</th>
                    <th>Mark</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Action</th>
                    </tr>
            </thead>
            <tbody>
                <?php

                foreach  ($vehicles as $vehicle)
                {
                    ?>
                    <tr>
                        <td><?php echo $vehicle->getCategories();?></td>
                        <td><?php echo $vehicle->getMark();?></td>
                        <td><?php echo $vehicle->getColor();?></td>
                        <td><?php echo $vehicle->getPrice();?></td>
                        <td class="row .col-xs-4 .col-sm-6">


                             <!-- passe en GET l'id de l'objet (vehicle), le get est envoyé vers read.php -->
                             <!-- pass in GET the id of the object (vehicle), the get is sent to read.php -->
                            <a class="btn btn-outline-info" href="read.php?id=<?php echo  $vehicle->getId()?>">read</a>

                            <a class="btn btn-outline-warning" href="edit.php">Edit</a>
                            <a class="btn btn-outline-danger"  href="delete.php">delete</a>
                            <!-- data-toggle="modal" data-target="#delete-modal" -->
                        </td>
                    </tr>


                    <?php
                }
                ?>

            </tbody>
         </table>
 </div>
 </form>
 </div>

 <?php
 require 'footer.php';
 ?>
