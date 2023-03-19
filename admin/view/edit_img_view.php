
<?php
#recived for id
if(isset($_GET['status'])){
      if($_GET['status']=='editimg'){
        $id=$_GET['id'];
      }
}
#acces for function.php
if(isset($_POST['change_img_btn'])){
    $msg=$obj->edit_img($_POST);
    
}

?>






<div class="shadow m-5 p-5">
    <?php if(isset($msg)){ echo $msg;}?>
    <form action="" method="POST" enctype="multipart/form-data" class="form">
        <input type="hidden" value="<?php echo $id?>" name="editimg_id" id="">
        <div class="form-group">
            <label class="small mb-1" for="change_img">Change thumbnil</label><br>
            <input type="file" name="change_img" id="change_img" class="py-4">

        </div>
        <input type="submit" value="Change thumbnil" name="change_img_btn" class="btn btn-primary">
    </form>
    
</div>
