
<?php

$catName=$obj->display_category();
 
   if(isset($_POST['add_post'])){
         $msg= $obj->add_post($_POST);

   }
    
 ?>



<h1>add_post</h1>
<?php if(isset($msg)) echo $msg;  ?>

<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label class="small mb-1" for="post_title">Post Title</label>
    <input type="text" name="post_title" id="post_title" class="form-control py-4">
</div>


  <div class="form-group">
    <label class="small mb-1" for="post_content">Post content</label>
    <textarea class="form-control"name="post_content" id="post_content" cols="30" rows="10"></textarea>
   
  </div>
  <div class="form-group">
    <label class="small mb-1" for="post_img">upload thumbnil</label><br>
    <input type="file" name="post_img" id="post_img" class="py-4">

  </div>
  <div class="form-group">
    <label class="small mb-1" for="post_category">Select Post category</label>
    <select class="form-control" name="post_category" id="post_category">
        <?php while($category=mysqli_fetch_assoc($catName)){?>
            <option value="<?php echo $category['cat_id'];?>"><?php echo $category['cat_name'] ?></option>
            <?php }?>
    </select>

  </div>
  <div class="form-group">
    <label class="small mb-1" for="post_summery">Post summary</label>
    <input type="text" name="post_summery" id="post_summery" class="form-control py-4">

  </div>
  <div class="form-group">
    <label class="small mb-1" for="post_tag">Post Tag</label>
    <input type="text" name="post_tag" id="post_tag" class="form-control py-4">

  </div>
  <div class="form-group">
    <label class="small mb-1" for="post_status">Post Satatus</label>
    <select name="post_status" id="post_status">
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
    </select>

  </div>
 

  <input type="submit" value="Add post" name="add_post" class=" form-control btn btn-block btn-primary">
</form>