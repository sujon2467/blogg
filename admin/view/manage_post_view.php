
<?php
     $post=$obj->display_post();
?>



<h1>manage_post</h1>
<div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Thumbnil</th>
        <th>Author</th>
        <th>Date</th>
        <th>Category</th>
        <th>status</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody>
        <?php while($postdata=mysqli_fetch_assoc($post)){?>
        <tr>
            <td><?php echo $postdata ['post_id']; ?></td>
            <td><?php echo $postdata ['post_title']; ?></td>
            <td><?php echo $postdata ['post_content']; ?></td>
            <td><img height="100px" src="../upload/<?php echo $postdata ['post_img']; ?>" alt="">
            <br>
            <a href="edit_img.php?status=editimg&&id=<?php echo $postdata ['post_id']; ?>">Change</a>
            </td>
            <td><?php echo $postdata ['post_author']; ?></td>
            <td><?php echo $postdata ['post_date']; ?></td>
            <td><?php echo $postdata ['cat_name']; ?></td>
            <td><?php echo $postdata ['post_status']; ?></td>
            <td>
                <a class="btn btn-primary"href="edit_post.php?status=edit_post&&id=<?php echo $postdata ['post_id']; ?>">Edit</a>
                <a class="btn btn-danger"href="">delete</a>
            </td>
            
        </tr>
        <?php }?>
    </tbody>

    </table>
</div>