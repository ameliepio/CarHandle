<?php
require './header.php';
?>

<div id="main" class="container-fluid">
    <h3 class="page-header"></h3>

<form class="" action="index.html" method="post">
        <div id="actions">
            <div class="col-md-3">
                <a href="add.html" class="btn btn-outline-success">Add vehicle</a>
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
                <tr>
                    <td>1001</td>
                    <td>Lorem </td>
                    <td>Jes</td>
                    <td>0bbbbbb</td>
                    <td class="row .col-xs-4 .col-sm-6">
                            <a class="btn btn-outline-info" href="view.html">read</a>
                        <a class="btn btn-outline-warning" href="edit.html">Edit</a>
                        <a class="btn btn-outline-danger"  href="#" data-toggle="modal" data-target="#delete-modal">delete</a>
                    </td>
                </tr>
            </tbody>
         </table>
 </div>
         <div class="form-group">
        <label for="exampleTextarea">Description</label>
        <textarea class="form-control" id="exampleDescription" rows="3"></textarea>
</div>

 </form>
        </div>

 <?php
require './footer.php';
?>
