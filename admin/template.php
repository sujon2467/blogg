
<?php
#loging for code
include("class/function.php");

#object
$obj=new crudapp;

session_start();
$id=$_SESSION['adminID'];
if($id==null){
    header("location:index.php");
}
  #logout for code

  if(isset($_GET['adminlogout'])){
    if($_GET['adminlogout']=='logout'){
        $obj->adminLogout();
    }
  }
                

?>




<?php include_once("includes/head.php")?>

    <body class="sb-nav-fixed">

        <?php include_once("includes/topnavbar.php")?>

        <div id="layoutSidenav">

      <?php include_once("includes/sidenav.php")?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container_fulid">
               <!-- #das_bord_view -->
             <?php 
             
             if (isset($view)){
                if($view=="dashbord"){
                    include("view/dash_view.php");
                }elseif($view=="manage_category.php"){
                    include("view/manage_cat.php");
                }elseif($view=="manage_post.php"){
                    include("view/manage_post_view.php");
                }elseif($view=="add_category.php"){
                    include("view/add_cat.php");
                }elseif($view=="add_post.php"){
                    include("view/add_post_view.php");
                }elseif($view=="edit_img.php"){
                    include("view/edit_img_view.php");
                }elseif($view=="edit_post.php"){
                    include("view/edit_post_view.php");
                }

                
             }
             
             
             ?>
                
                  
                    </div>
                </main>
                <?php include_once("includes/footer.php");?>
            </div>
        </div>
        <?php include_once("includes/script.php");?>
    </body>
</html>
