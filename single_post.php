
<?php 
     include("admin/class/function.php");
     $obj=new crudapp();
     
     $getcat=$obj->display_category();

     if(isset($_GET['view'])){
        if($_GET['view']='postview'){
            $id=$_GET['id'];
            $single= $obj->get_post_info($id);
        }
     }


?>



<?php include_once("includes/head.php") ?>

<body>

    <?php include_once("includes/preloder.php") ?>

    <?php include_once("includes/header.php") ?>

    <!-- Page Content -->

    <?php include_once("includes/banner.php") ?>


    <?php include_once("includes/cta.php") ?>

    <section class="blog-posts">
        <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <img height="300px"src="upload/<?php echo $single['post_img']?>" alt=""class="img-fulid">
          <h2>
            <?php echo $single['post_title']?>
          </h2>
          <p>
            <?php echo $single['post_content']?>
          </p>
    </div>
                <?php include_once("includes/sidebar.php") ?>
            </div>
    </section>


    <?php include_once("includes/footer.php") ?>

    <?php include_once("includes/script.php") ?>