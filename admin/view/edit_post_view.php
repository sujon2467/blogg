
<?php
 if(isset($_GET['status'])){
    if($_GET['status']='edit_post'){
          $id=$_GET['id'];
         $postdata= $obj->get_post_info($id);
    }
 }
   if(isset($_POST['update_post'])){
       $msg= $obj->update_post($_POST);
   }
?>


<div class="shadow m-5 p-5">
    <?php if(isset($msg)){ echo $msg;}?>
    <form action="" method="POST"  class="form">
        <input type="hidden" value="<?php echo $id?>" name="edit_post_id" id="">
        <div class="form-group">
            <label  class="small mb-1" for="change_title">Change Tittle</label><br>
            <input value="<?php echo $postdata['post_title']; ?>" class="form-control" type="text" name="change_title" id="change_title" class="py-4">

        </div>
        <div class="form-group">
            <label class="small mb-1" for="change_content">Change Content</label><br>
            <textarea class="form-control"name="change_content" id="change_content" cols="30" rows="10">
            <?php echo $postdata['post_content'] ?>
            </textarea>
        </div>
        <input type="submit" value="update_post" name="update_post" class="btn btn-primary">
    </form>
    
</div>
