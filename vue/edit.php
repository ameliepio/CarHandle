<?php
require './header.php';
?>

<h2>Edit Vehicle</h2>

<form>
  <div class="form-group">
    <label for="exampleInputCategories">Categories</label>
    <input type="text" class="form-control" id="exampleInputCategories" aria-describedby="emailHelp" placeholder="Enter Categories">
  </div>
  <div class="form-group">
    <label for="exampleInputMark">Mark</label>
    <input type="text" class="form-control" id="exampleInputMark" placeholder="Mark">
  </div>
  <div class="form-group">
    <label for="exampleInputColor">Color</label>
    <input type="text" class="form-control" id="exampleInputColor" placeholder="Color">
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Price</label>
    <input type="text" class="form-control" id="exampleInputPrice" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleDescription">Description</label>
    <textarea class="form-control" id="exampleDescription" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
require './footer.php';
?>
