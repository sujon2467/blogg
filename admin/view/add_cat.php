<?php


if (isset($_POST['add_cat'])) {

  $return_msg = $obj->add_category($_POST);

}



?>





<h1>add_catagory page</h1>
<?php if (isset($return_msg)) {
  echo "$return_msg";
} ?>

<form action="" method="POST">
  <div class="form-group">
    <label class="small mb-1" for="cat_name">Add_category</label>
    <input type="text" name="cat_name" id="cat_name" class="form-control py-4">
</div>


  <div class="form-group">
    <label class="small mb-1" for="cat_des">Add_Description</label>
    <input type="text" name="cat_des" id="cat_des" class="form-control py-4">

  </div>

  <input type="submit" value="Add category" name="add_cat" class=" form-control btn btn-block btn-primary">
</form>